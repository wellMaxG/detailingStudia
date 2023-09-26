@extends('layouts.app')

@section('content')

<x-span-success />

    <h1>Список услуг</h1>

    <x-span-bt-create href="{{ route('services.create') }}">Добавить услугу</x-span-bt-create>

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
                    <td  rows="10">{{ $service->description }}</td>
                    <td>{{ $service->price }}</td>
                    <td>{{ $service->duration_minutes }}</td>

                    <td>

                        <x-span-bt-edit href="{{ route('services.edit', $service->id) }}">Редактировать</x-span-bt-edit>

                        <x-span-bt-show href="{{ route('services.show', $service->id) }}">Просмотреть</x-span-bt-show>

                        <x-span-bt-delete href="{{ route('services.delete', $service->id) }}">Удалить</x-span-bt-delete>

                    </td>

                </tr>

            @endforeach

        </tbody>

    </x-table>
    
@endsection
