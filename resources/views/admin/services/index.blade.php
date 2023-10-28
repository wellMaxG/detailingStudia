@extends('layouts.app')
@section('page.title', 'Список услуг')
@section('content')

<x-container>
        <x-form-card>
            <x-alert-success />

            <x-form-card-header>
                <x-form-card-title>
                    {{ __('Запись клиента на услугу') }}
                </x-form-card-title>
            </x-form-card-header>

            <x-form-card-header class="text-end">
                <x-btn-black class="btn-outline-success" href="{{ route('service.create') }}">{{ __('Добавить услугу') }}</x-btn-black>
                <x-btn-black href="{{ route('admin.dashboard') }}">{{ __('Назад') }}</x-btn-black>
            </x-form-card-header>
           
            
            <x-table-responsive>
    <x-table>
        <thead>
            <tr>
                <th>{{ __('Название...') }}</th>
                <th>{{ __('Описание...') }}</th>
                <th>{{ __('Стоимость...') }}</th>
                <th>{{ __('Длительность...') }}</th>
                <th>{{ __('Действия...') }}</th>  
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
                        <x-btn-black class="btn-outline-success btn-sm" href="{{ route('service.show', $service->id) }}">{{ __('подробнее...') }}</x-btn-black>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </x-table>
</x-table-responsive>
</x-form-card>
</x-container>
@endsection
