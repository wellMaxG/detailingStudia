<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminUsersController extends Controller
{
    public function index()
    {
        // Вывести список всех пользователей
        $users = User::all();
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
            'name' => ['required', 'string', 'max:255', 'regex:/^[^0-9].*$/'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:16','min:11','unique:users', 'regex:/^\d{1,3} \(\d{3}\) \d{3}-\d{4}$/'],
            'password' => ['required', 'string', 'min:4',],
        ]);
        

        // Создаем нового клиента в базе данных
        User::create($validatedData);

        // Редирект на страницу со списком клиентов
        return redirect()->route('user.index')->with('success', 'Клиент успешно добавлен!');
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
        // Форма для редактирования существующего пользователя
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        // Валидация данных, пример:
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255', 'regex:/^[^0-9].*$/'],
            'email' => ['required', 'string', 'email', 'max:255', ],
            'phone' => ['required', 'string', 'max:16','min:11', 'regex:/^\d{1,3} \(\d{3}\) \d{3}-\d{4}$/'],

        ]);

        // Обновляем данные клиента
        $user->update($validatedData);

      // Редирект на страницу со списком клиентов
        return redirect()->route('user.index');
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
            
                    return redirect()->route('user.index');
            
    }
}
