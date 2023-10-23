<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Service;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AppointmentsController extends Controller
{
    public function create()
    {
        if (auth()->check()) {
            // Если пользователь зарегистрирован, можно использовать его данные
            $user = Auth::user();
        } else {
            // Если пользователь не зарегистрирован, создаем пустую модель
            $user = new User();
        }
        $services = Service::all();

        return view('appointments.create', ['user' => $user], compact('services'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $validatedData = $request->validate([
            'client_name' => ['required', 'string', 'max:100', 'regex:/^[^0-9].*$/'],
            'phone' => ['required', 'string','min:11', 'max:12'],
            'service_id' => ['required', 'exists:services,id'],
            'appointment_date' => ['required', 'date', 'after_or_equal:today'],
            'appointment_time' => ['required', 'date_format:H:i', 'after:10:00', 'before:22:00'],
            'question'=> ['nullable','string','max:200'],
            'user_id'=> ['nullable', 'string'],
    ]);
  
    if (!$user) {
        $validatedData['user_id'] = 1;
        } else {
        $validatedData['user_id'] = $user->id;
        }
    
        Appointment::create($validatedData);

        
        return redirect()->route('home.index')->with('success', 'Вы успешно записались на услугу!');
    }

    public function show($id)
{

    // Найдем клиента по его ID
    $appointment = Appointment::findOrFail($id);
  
    return view('appointments.show', compact('appointment'));
    
}

   
    // public function edit(Appointment $appointment)
    // {
    //     $services = Service::all();
    //     return view('admin.appointments.edit', compact('appointment','services'));
    // }
    
//     public function update(Request $request, Appointment $appointment)
//     {
//         // Валидация данных, пример:
//         $validatedData = $request->validate([
//             'client_name' => 'required|string',
//             'service_id' => 'required|exists:services,id',
//             'appointment_datetime' => 'required|date',
//             'status' => 'required|string',
//         ]);
        
//         // Обновляем данные записи на услугу
//         $appointment->update($validatedData);
        
//         // Редирект на страницу со списком записей
//         return redirect()->route('appointments.index');
//     }
}
