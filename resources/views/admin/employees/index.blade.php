@extends('layouts.app')

@section('content')

<x-span-success />

    <h1>Список сотрудников</h1>
    
    <x-span-bt-create href="{{ route('employee.create') }}">Добавить сотрудника</x-span-bt-create>

    <x-table>

        <thead>

            <tr>

                <th>ID</th>
                <th>Имя</th>
                <th>Телефон</th>
                <th>Специализация</th>
                <th>Действия</th>
                
            </tr>

        </thead>

        <tbody>

            @foreach ($employees as $employee)

                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->phone }}</td>
                    <td>{{ $employee->specialization }}</td>
                    <td>

                        <x-span-bt-edit href="{{ route('employee.edit', $employee->id) }}">Редактировать</x-span-bt-edit>

                        <x-span-bt-show href="{{ route('employee.show', $employee->id) }}">Просмотреть</x-span-bt-show>
                        
                        <x-span-bt-delete href="{{ route('employee.delete', $employee->id) }}">Удалить</x-span-bt-delete>
                
                    </td>

                </tr>

            @endforeach

        </tbody>

    </x-table>

    <x-span-bt-create href="{{ route('admin.dashboard') }}">Назад</x-span-bt-create>

@endsection