@extends('layouts.app')

@section('content')

<x-alert-success />

    <h1>Список услуг</h1>

    <x-btn-black href="{{ route('service.create') }}">Добавить услугу</x-btn-black>

    <x-table>

        <thead>

            <tr>

                <th>ID</th>
                <th>Название</th>
                <th>Описание</th>
                <th>Стоимость</th>
                <th>Длительность</th>
                <th>Действия</th>
                
            </tr>

        </thead>

    <tbody>

            @foreach ($services as $service)

                <tr>

                    <td>{{ $service->id }}</td>
                    <td>{{ $service->name }}</td>
                    <td>{{ $service->description }}</td>
                    <td>{{ $service->price }}</td>
                    <td>{{ $service->duration_minutes }}</td>

                    <td>

                        <x-btn-edit href="{{ route('service.edit', $service->id) }}">Редактировать</x-btn-edit>

                        <x-btn-show href="{{ route('service.show', $service->id) }}">Просмотреть</x-btn-show>

                        <x-btn-delete href="{{ route('service.delete', $service->id) }}">Удалить</x-btn-delete>

                    </td>

                </tr>

            @endforeach

        </tbody>

    </x-table>

    <x-btn-black href="{{ route('admin.dashboard') }}">Назад</x-btn-black>
    
@endsection
