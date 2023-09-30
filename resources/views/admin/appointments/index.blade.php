@extends('layouts.app')

@section('content')

<x-span-success />

    <h1>Список записей на услуги</h1>

    <x-span-bt-create href="{{ route('appointment.create') }}">Добавить запись</x-span-bt-create>

    <x-table>

        <thead>

            <tr>
                <th>ID</th>
                <th>Клиент</th>
                <th>Услуга</th>
                <th>Телефон</th>
                <th>Дата и время</th>
                <th>Статус</th>
                <th>Действия</th>
            </tr>

        </thead>

        <tbody>

            @foreach ($appointments as $appointment)

                <tr>
                    <td>{{ $appointment->id }}</td>
                    <td>{{ $appointment->client_name }}</td>
                    <td>{{ $appointment->service->name }}</td>
                    <td>{{ $appointment->phone }}</td>
                    <td>{{ $appointment->appointment_datetime }}</td>
                    <td>{{ $appointment->status }}</td>
                    <td>

                        <x-span-bt-edit href="{{ route('appointment.edit', $appointment->id) }}">Редактировать</x-span-bt-edit>

                        <x-span-bt-show href="{{ route('appointment.show', $appointment->id) }}">Просмотреть</x-span-bt-show>

                        <x-span-bt-delete href="{{ route('appointment.delete', $appointment->id) }}">Удалить</x-span-bt-delete>

                    </td>

                </tr>

            @endforeach

        </tbody>

    </x-table>

    <x-span-bt-create href="{{ route('admin.dashboard') }}">Назад</x-span-bt-create>

@endsection


