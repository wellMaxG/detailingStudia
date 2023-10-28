@extends('layouts.app')
@section('page.title', 'Информация о записе')
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
                    
                    <p>Время и дата записи: <strong>{{ date('d-m-Y', strtotime($appointment->appointment_date)) }} 
                        
                        {{ date('H:i', strtotime( $appointment->appointment_time)) }}</strong></p>

                    <p>Коментарий клиента: <strong>{{ $appointment->question }}</strong></p>
                    
                    <p>Статус выполнения: <strong>{{ $appointment->status }}</strong></p>

                            <x-btn-black class="btn-outline-primary" href="{{ route('appointment.edit', $appointment->id) }}">{{ __('Редактировать') }}</x-btn-black>
                        <x-btn-black class="btn-outline-danger" href="{{ route('appointment.delete', $appointment->id) }}">{{ __('Удалить') }}</x-btn-black>
                    <x-btn-black href="{{ route('appointment.index') }}" class="btn btn-primary">{{ __('Назад к списку записей') }}</x-btn-black>
                </x-form-card-body>
        </x-form-card>
</x-container-6>
@endsection