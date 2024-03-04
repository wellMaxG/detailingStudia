@extends('layouts.app')
@section('page.title', 'Запись на услугу')
@section('content')

    <x-container-6>

        <h1 class="my-3 mb-3">{{ __('Подробности') }}</h1>

            <div class="card text-bg-dark">

                <div class="card-header card-header bg-transparent border-warning">
            
                    {{__('Информация о записе:')}}
            
                </div>
            
                <div class="card-body text-start">
                    
                    <p><strong>Имя клиента:</strong> {{ $appointment->client_name }}</p>
                    
                    <p><strong>Услуга:</strong> {{ $appointment->service->name }}</p>
                    
                    <p><strong>Время и дата записи:</strong> {{ $appointment->appointment_datetime }}</p>
                    
                    <p><strong>Статус выполнения:</strong> {{ $appointment->status }}</p>

                    <a href="{{ route('appointments.index') }}" class="btn btn-primary">Назад к списку записей</a>
            
                </div>
                
            </div>
    
        </x-container-6>

@endsection


