@extends('layouts.app')

@section('content')

    <h1>Добавить нового клиента</h1>

    <x-validation-errors />
    
    <form method="POST" action="{{ route('admin.store') }}">
        @csrf

        <div class="form-group">
            <label for="name" class="required">Имя:</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" autofocus>
        </div>

        <div class="form-group">
            <label for="email" class="required">Email:</label>
            <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}">
        </div>

        <div class="form-group">
            <label for="phone" class="required">Телефон:</label>
            <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone') }}">
        </div>

        <div class="form-group">
            <label for="password" class="required">Пароль:</label>
            <input type="text" class="form-control" name="password" id="password">
        </div>

        <button type="submit" class="btn btn-primary">Создать клиента</button>
    </form>
@endsection
