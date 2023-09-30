@extends('layouts.app')

@section('content')
    <h1>Редактировать сотрудника</h1>

    <x-validation-errors />

    <form method="POST" action="{{ route('employee.update', $employee->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Имя</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $employee->name) }}">
        </div>

        <div class="form-group">
            <label for="phone">Телефон</label>
            <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone', $employee->phone) }}">
        </div>

        <div class="form-group">
            <label for="specialization">Специализация</label>
            <input type="specialization" class="form-control" name="specialization" id="specialization" value="{{ old('specialization', $employee->specialization) }}">
        </div>

        <button type="submit" class="btn btn-primary">Сохранить изменения</button>
        <a href="{{ route('employee.index') }}" class="btn btn-secondary">Отмена</a> 
    </form>
@endsection
