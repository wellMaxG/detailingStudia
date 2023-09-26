@extends('layouts.app')

@section('content')

<h1>Редактировать запись на услугу</h1>

    <x-validation-errors />

    <form method="POST" action="{{ route('appointments.update', $appointment->id) }}">
        @csrf

        @method('PUT')

        <div class="form-group">
            <label for="client_name">Введите имя:</label>
            <input type="text" class="form-control" name="client_name" id="client_name" value="{{ old('client_name', $appointment->client_name) }}">
        </div>

        <div class="form-group">
            <label for="service_id">Услуга</label>
            <select class="form-control" name="service_id" id="service_id">
                <option value="" disabled selected>Выберите услугу</option>
                @foreach ($services as $service)
                    <option value="{{ $service->id }}" {{ $appointment->service_id == $service->id ? 'selected' : '' }}>
                        {{ $service->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="appointment_datetime">Выберите дату и время:</label>
            <input type="datetime-local" class="form-control" name="appointment_datetime" id="appointment_datetime" value="{{ old('appointment_datetime', $appointment->appointment_datetime) }}">
        </div>


        <div class="form-group">
            <label for="status">Статус</label>
            <select class="form-control" name="status" id="status">
                <option value="Запланировано" {{ $appointment->status === 'Запланировано' ? 'selected' : '' }}>Запланировано</option>
                <option value="В процессе" {{ $appointment->status === 'В процессе' ? 'selected' : '' }}>В процессе</option>
                <option value="Завершено" {{ $appointment->status === 'Завершено' ? 'selected' : '' }}>Завершено</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Сохранить изменения</button>
    </form>
@endsection
