<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfficeController extends Controller
{
    public function profile()
    {
        $user = auth()->user(); // Получение текущего аутентифицированного пользователя
        return view('users.office.profile', compact('user'));
    }

    public function editProfile()
    {
        $user = auth()->user();
        return view('users.edit_profile', compact('user'));
    }

    // public function updateProfile(Request $request)
    // {
    //     $user = auth()->user();

    //     // Валидация данных
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
    //         // Другие поля профиля
    //     ]);

    //     // Обновление данных профиля
    //     $user->update([
    //         'name' => $request->input('name'),
    //         'email' => $request->input('email'),
    //         // Другие поля профиля
    //     ]);

    //     return redirect()->route('client.profile')->with('success', 'Профиль успешно обновлен.');
    // }
}
