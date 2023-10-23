@extends('layouts.app')

@section('content')

<x-alert-success />

    <h1>Список сотрудников</h1>
    
    <x-btn-black href="{{ route('employee.create') }}">Добавить сотрудника</x-btn-black>

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

                        <x-btn-edit href="{{ route('employee.edit', $employee->id) }}">Редактировать</x-btn-edit>

                        <x-btn-show href="{{ route('employee.show', $employee->id) }}">Просмотреть</x-btn-show>
                        
                        <x-btn-delete href="{{ route('employee.delete', $employee->id) }}">Удалить</x-btn-delete>
                
                    </td>

                </tr>

            @endforeach

        </tbody>

    </x-table>

    <x-btn-black href="{{ route('admin.dashboard') }}">Назад</x-btn-black>

@endsection