<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Подключаем модель для клиентов

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Получаем список всех клиентов из базы данных
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        // Валидация данных, пример:
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'phone' => 'nullable|string',
            'password' => 'required|string',
        ]);

        // Создаем нового клиента в базе данных
        User::create($validatedData);

        // Редирект на страницу со списком клиентов
        return redirect()->route('users.index')->with('success', 'Клиент успешно добавлен!');
    }

    public function show($id)
{
    // Найдем клиента по его ID
    $user = User::findOrFail($id);

    // Вернем представление, передав данные клиента
    return view('admin.users.show', compact('user'));
}


    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        // Валидация данных, пример:
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users,email,' . $user->id, // Исключаем текущего клиента по ID
            'phone' => 'nullable|string',
            'password' => 'required|string',
        ]);

        // Обновляем данные клиента
        $user->update($validatedData);

        // Редирект на страницу со списком клиентов
        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        return view('admin.users.delete', compact('user'));
    }
    public function delete($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        session()->flash('success', 'Клиент успешно удален.');

        return redirect()->route('users.index');

    }
}
