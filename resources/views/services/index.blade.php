@extends('layouts.app')

@section('page.title','Страница услуг')

@section('content')

<x-span-success />

    <h1 class="h">Список услуг</h1>

    <x-table>

        <thead>

            <tr>

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

                    <td>{{ $service->name }}</td>
                    <td>{{ $service->description }}</td>
                    <td>{{ $service->price }}</td>
                    <td>{{ $service->duration_minutes }}</td>

                    <td>

                        <x-span-bt-show href="{{ route('services.show', $service->id) }}">Подробнее...</x-span-bt-show>

                        <x-bt-success href="{{ route('services.show', $service->id) }}">Записаться</x-bt-success>


                    </td>

                </tr>

            @endforeach

        </tbody>

    </x-table>

    <x-span-bt-create href="{{ url('/home') }}">На главную</x-span-bt-create>
    
@endsection
