<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::all(); // Получаем список всех услуг из базы данных
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        // Валидация данных, пример:
        $validatedData = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'duration_minutes' => 'required|string',
        ]);

        // Создаем новую услугу в базе данных
        Service::create($validatedData);

        // Редирект на страницу со списком услуг
        return redirect()->route('services.index')->with('success', 'Услуга успешно добавлена!');
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function show($id)
{
    $service = Service::findOrFail($id);
    return view('services.show', compact('service'));
}

    public function update(Request $request, Service $service)
    {
        // Валидация данных, пример:
        $validatedData = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'duration_minutes' => 'required|string',
        ]);

        // Обновляем данные услуги
        $service->update($validatedData);

        // Редирект на страницу со списком услуг
        return redirect()->route('services.index');
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);

        return view('admin.services.delete', compact('service'));
    }

    public function delete($id)
    {
        $service = Service::findOrFail($id);

        $service->delete();

        session()->flash('success', 'Услуга успешно удалена.');

        return redirect()->route('services.index');

    }
}

