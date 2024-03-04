<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee; // Подключаем модель для сотрудников

class EmployeesController extends Controller
{
    public function index()
    {
        $employees = Employee::all(); // Получаем список всех сотрудников из базы данных
        return view('admin.employees.index', compact('employees'));
    }

    public function create()
    {
        return view('admin.employees.create');
    }


    public function store(Request $request)
    {
        // Валидация данных, пример:
        $validatedData = $request->validate([
            'name' => 'required|string',
            'phone' => 'nullable|string',
            'specialization' => 'string',
        ]);

        // Создаем нового сотрудника в базе данных
        Employee::create($validatedData);

        return redirect()->route('employees.index')->with('success', 'Сотрудник успешно добавлен');
        
    }

    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return view('admin.employees.show', compact('employee'));
    }

    public function edit(Employee $employee)
    {
        return view('admin.employees.edit', compact('employee'));
    }


    public function update(Request $request, Employee $employee)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'phone' => 'nullable|string',
            'specialization' => 'string',
        ]);

        $employee->update($validatedData);

        return redirect()->route('employees.index');
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);

        return view('admin.employees.delete', compact('employee'));

    }


    public function delete($id)
    {
        $employee = Employee::findOrFail($id);

        $employee->delete();

        session()->flash('success', 'Сотрудник успешно удален.');

        return redirect()->route('employees.index');

    }


}