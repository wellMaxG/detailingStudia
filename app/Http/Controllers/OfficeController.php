<?php

namespace App\Http\Controllers;

use App\Models\Appointment;

use Illuminate\Http\Request;


class OfficeController extends Controller
{
    public function profile()
    {
        $user = auth()->user();
        return view('office_user.profile', compact('user'));
    }

    public function editProfile()
    {
        $user = auth()->user();
        return view('office_user.edit-profile', compact('user'));
    }
    public function show($id)
    {
        $appointment = Appointment::findOrFail($id);
      
        return view('appointments.show', compact('appointment'));
    }

    public function updateProfile(Request $request)
    {
        $user = auth()->user();

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'phone' => 'nullable|string',

        ]);

        // Обновление данных профиля
        $user->update($validatedData);

        return redirect()->route('office.profile')->with('success', 'Профиль успешно обновлен.');
    }
}
