@extends('layouts.app')

@section('content')
    <h1>Редактировать клиента</h1>

    <x-validation-errors />

    <form method="POST" action="{{ route('user.update', $user->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Имя</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $user->name) }}">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" value="{{ old('email', $user->email) }}">
        </div>

        <div class="form-group">
            <label for="phone">Телефон</label>
            <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone', $user->phone) }}">
        </div>

        <div class="form-group">
            <label for="password" class="required">Пароль:</label>
            <input type="text" class="form-control" name="password" id="password" value="{{ old('phone', $user->phone) }}">
        </div>

        <button type="submit" class="btn btn-primary">Сохранить изменения</button>
        <a href="{{ route('user.index') }}" class="btn btn-secondary">Отмена</a> 
    </form>
@endsection
