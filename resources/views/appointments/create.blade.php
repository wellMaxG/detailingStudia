@extends('layouts.app')

@section('content')

   <x-validation-errors />

    <div class="container">

        <x-span-success />

        <h1>Запись на услугу</h1>

        <form method="POST" action="{{ route('appointments.store') }}">
            @csrf
           
        <div class="form-group">
            <label for="client_name" class="required">Введите имя:</label>
            <input type="text" class="form-control" name="client_name" id="client_name" autofocus>
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
                <label for="status">Статус</label>
                <select class="form-control" name="status" id="status">
                    <option value="Запланировано">Запланировано</option>
                    <option value="В процессе">В процессе</option>
                    <option value="Завершено">Завершено</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Записаться</button>
        </form>
    </div>
    @endsection


