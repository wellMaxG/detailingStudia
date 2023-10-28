<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;

class AdminAppointmentsController extends Controller
{
    public function index()
    {
        
    $appointments = Appointment::orderBy('appointment_date')->orderBy('appointment_time')->where('appointment_date', '>=', Today())->get();
    return view('admin.appointments.index', compact('appointments'));

        // $appointments = Appointment::all(); 
        // return view('admin.appointments.index', compact('appointments'));
    }

    public function create()
    {
        $services = Service::all();
        return view('admin.appointments.create', compact('services'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        // Валидация данных
        $validatedData = $request->validate([
            'client_name' => ['required', 'string', 'max:100', 'regex:/^[^0-9].*$/'],
            'phone' => ['required', 'string','min:11', 'max:16'],
            'service_id' => ['required', 'exists:services,id'],
            'appointment_date' => ['required', 'date', 'after_or_equal:today'],
            'appointment_time' => ['required', 'date_format:H:i', 'after:10:00', 'before:22:00'],
            'status' => ['required', 'string'],
            'question'=> ['nullable','string','max:200'],
            'user_id'=> ['nullable', 'string'],
    ]);
    if (!$user) {
        $validatedData['user_id'] = 1;
        } else {
        $validatedData['user_id'] = $user->id;
        }
    
        Appointment::create($validatedData);
    
        return redirect()->route('appointment.index')->with('success', 'Запись успешно добавлена!');
    }

    public function show($id)
{
    // Найдем клиента по его ID
    $appointment = Appointment::findOrFail($id);
  
    return view('admin.appointments.show', compact('appointment'));
}
   
    public function edit(Appointment $appointment)
    {
        $services = Service::all();
        return view('admin.appointments.edit', compact('appointment','services'));
    }
    
    public function update(Request $request, Appointment $appointment)
    {
        // Валидация данных, пример:
        $validatedData = $request->validate([
            'client_name' => ['required', 'string', 'max:100', 'regex:/^[^0-9].*$/'],
            'phone' => ['required', 'string','min:11', 'max:16'],
            'service_id' => ['required', 'exists:services,id'],
            'appointment_date' => ['required', 'date', 'after_or_equal:today'],
            'appointment_time' => ['required', 'after:10:00', 'before:22:00'],
            'status' => ['required', 'string'],
            'question'=> ['nullable','string','max:200'],
            'user_id'=> ['nullable', 'string'],
        ]);
        
        // Обновляем данные записи на услугу
        $appointment->update($validatedData);
        
        // Редирект на страницу со списком записей
        return redirect()->route('appointment.index');
    }

    public function destroy($id)
    {
        
        $appointment = Appointment::findOrFail($id);

        return view('admin.appointments.delete', compact('appointment'));

    }

    public function delete($id)
    {
        $appointment = Appointment::findOrFail($id);

        $appointment->delete();

        session()->flash('success', 'Запись успешно удалена.');

        return redirect()->route('appointment.index');

    }
}
