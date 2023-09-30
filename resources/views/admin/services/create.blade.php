@extends('layouts.app')

@section('content')

    <h1>Создать новую услугу</h1>

    <x-validation-errors />

    <form action="{{ route('service.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Название услуги</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
        </div>

        <div class="form-group">
            <label for="description">Описание</label>
            <input type="text" class="form-control" name="description" id="description" value="{{ old('description') }}">
        </div>
        
        <div class="form-group">
            <label for="price">Стоимость</label>
            <input type="number" class="form-control" name="price" id="price" value="{{ old('price') }}">
        </div>

        <div class="form-group">
            <label for="duration_minutes">Длительность</label>
            <input type="text" class="form-control" name="duration_minutes" id="duration_minutes" value="{{ old('duration_minutes') }}">
        </div>

        <button type="submit" class="btn btn-primary">Создать услугу</button>
        
        <a href="{{ route('service.index') }}" class="btn btn-secondary">Отмена</a>
    </form>
@endsection