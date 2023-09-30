@extends('layouts.app')

@section('content')

<x-span-success />

    <h1>Список услуг</h1>

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

                        <x-span-bt-show href="{{ route('services.show', $service->id) }}">Подробнее...</x-span-bt-show>


                    </td>

                </tr>

            @endforeach

        </tbody>

    </x-table>

    <x-span-bt-create href="{{ url('/home') }}">На главную</x-span-bt-create>
    
@endsection
