<!-- resources/views/employees/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Добавить нового сотрудника</h1>

    <x-validation-errors />

    <form method="POST" action="{{ route('employees.store') }}">
        @csrf

        <div class="form-group">
            <label for="name" class="required">Имя</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" autofocus>
        </div>

        <div class="form-group">
            <label for="phone" class="required">Телефон</label>
            <input type="tel" class="form-control" name="phone" id="phone" value="{{ old('phone') }}">
        </div>
        
        <div class="form-group">
            <label for="specialization" class="required">Специализация</label>
            <input type="text" class="form-control" name="specialization" id="specialization" value="{{ old('specialization') }}">
        </div>

        <button type="submit" class="btn btn-primary">Создать сотрудника</button>
    </form>
@endsection
