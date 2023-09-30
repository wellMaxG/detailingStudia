@extends('layouts.app')

@section('content')

<x-span-success />

    <h1>Список записей на услуги</h1>

    <x-span-bt-create href="{{ route('appointments.create') }}">Добавить запись</x-span-bt-create>

    <x-table>

        <thead>

            <tr>
                <th>ID</th>
                <th>Клиент</th>
                <th>Услуга</th>
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
                    <td>{{ $appointment->appointment_datetime }}</td>
                    <td>{{ $appointment->status }}</td>
                    <td>

                        <x-span-bt-show href="{{ route('appointments.show', $appointment->id) }}">Просмотреть</x-span-bt-show>

                    </td>

                </tr>

            @endforeach

        </tbody>

    </x-table>

@endsection


