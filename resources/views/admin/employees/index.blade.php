@extends('layouts.app')
@section('page.title', 'Список сотрудников')
@section('content')

<x-container>
    <x-form-card>
        <x-alert-success />

        <x-form-card-header>
            <x-form-card-title>
                {{ __('Список сотрудников') }}
            </x-form-card-title>
        </x-form-card-header>

        <x-form-card-header class="text-end">
            <x-btn-black class="btn-outline-success" href="{{ route('employee.create') }}">{{ __('Добавить сотрудника') }}</x-btn-black>
            <x-btn-black href="{{ route('admin.dashboard') }}">{{ __('Назад') }}</x-btn-black>
        </x-form-card-header>
        <x-table-responsive>
    <x-table>
        <thead>
            <tr>
                <th>Имя</th>
                <th>Телефон</th>
                <th>Специализация</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->phone }}</td>
                    <td>{{ $employee->specialization }}</td>
                    <td>
                        <x-btn-black href="{{ route('employee.show', $employee->id) }}">{{ __('подробнее...') }}</x-btn-black>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </x-table>
</x-table-responsive>
</x-form-card>
</x-container>
@endsection