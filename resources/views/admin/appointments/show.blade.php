@extends('layouts.app')

@section('page.title', 'Информация о клиенте')

@section('content')

<x-container-6>
    <x-form-card>
        <x-form-card-header>
            <x-form-card-title>
                {{ __('Информация о записе:') }}
            </x-form-card-title>
                </x-form-card-header>

                    <x-form-card-body>

                    <p>Имя клиента: <strong>{{ $appointment->client_name }}</strong></p>
                    
                    <p>Телефон клиента: <strong>{{ $appointment->phone }}</strong></p>
                    
                    <p>Услуга: <strong>{{ $appointment->service->name }}</strong></p>
                    
                    <p>Время и дата записи: <strong>{{ $appointment->appointment_date }} {{ $appointment->appointment_time }}</strong></p>
                    
                    <p>Статус выполнения: <strong>{{ $appointment->status }}</strong></p>

                            <x-btn-black class="btn-outline-primary" href="{{ route('appointment.edit', $appointment->id) }}">Редактировать</x-btn-black>
                        <x-btn-black class="btn-outline-danger" href="{{ route('appointment.delete', $appointment->id) }}">Удалить</x-btn-black>
                    <x-btn-black href="{{ route('appointment.index') }}" class="btn btn-primary">Назад к списку записей</x-btn-black>
                </x-form-card-body>
        </x-form-card>
    </x-container-6>
@endsection


