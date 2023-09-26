@extends('layouts.app')

@section('content')

    <div class="container">

        <h1>Подробности</h1>

            <div class="card">

                <div class="card-header">
            
                    {{__('Информация о записе:')}}
            
                </div>
            
                <div class="card-body">
                    
                    <p><strong>Имя клиента:</strong> {{ $appointment->client_name }}</p>
                    
                    <p><strong>Услуга:</strong> {{ $appointment->service->name }}</p>
                    
                    <p><strong>Время и дата записи:</strong> {{ $appointment->appointment_datetime }}</p>
                    
                    <p><strong>Статус выполнения:</strong> {{ $appointment->status }}</p>

                    <a href="{{ route('appointments.index') }}" class="btn btn-primary">Назад к списку записей</a>
            
                </div>
                
            </div>
    
        </div>

@endsection


