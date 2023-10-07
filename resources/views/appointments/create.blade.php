@extends('layouts.app')

@section('content')

   <x-validation-errors />

    <div class="container">

        <x-span-success />

        <h1>Запись на услугу</h1>

        <form method="POST" action="{{ route('appointments.store') }}">
            @csrf
            
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

        <div class="form-group">
            <label for="client_name" class="required">Ваше имя:</label>
            <input type="text" class="form-control" name="client_name" id="client_name" autofocus required>
        </div>

        <div class="form-group">
            <label for="phone" class="required">Ваш телефон:</label>
            <input type="text" class="form-control" name="phone" id="phone" required>
        </div>

            <div class="form-group">
                <label for="service_id">Выберите услугу:</label>
                <select class="form-control" name="service_id" id="service_id" required>
                    <option value="" disabled selected>Выберите услугу</option>
                    @foreach ($services as $service)
                        <option value="{{ $service->id }}">{{ $service->name }} - {{ $service->price }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="appointment_datetime">Выберите дату и время:</label>
                <input type="datetime-local" name="appointment_datetime" id="appointment_datetime" class="form-control" required>        
            </div>
            

        

            <div class="form-group">
                <label for="question">Ваш вопрос:</label>
                <input type="text" class="form-control" name="question" id="question">
            </div>

            <button type="submit" class="btn btn-primary">Записаться</button>
            <a href="{{ route('appointment.index') }}" class="btn btn-secondary">Отмена</a> 
        </form>
    </div>
    @endsection


