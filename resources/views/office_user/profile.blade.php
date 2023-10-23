@extends('layouts.app')

@section('content')

<x-alert-success />

    <div class="container">

        <h1>Личный кабинет</h1>

        <p>Имя: {{ $user->name }}</p>

        <p>Email: {{ $user->email }}</p>
        
        <p>Phone: {{ $user->phone }}</p>
        
        <p>ID: {{ $user->id }}</p>

        <x-bt-on-head href="{{ route('home.index') }}">На главную</x-bt-on-head>

    </div>

    <form action="{{ route('avatar.upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" class="form-control" name="avatar">
        <button type="submit" class="btn btn-primary">Загрузить аватар</button>
        </form>
    
    <img src="{{ asset(auth()->user()->avatar) }}" alt="Аватар пользователя">

    <h2>Ваши записи на услуги:</h2>

    @if($user->appointments->isEmpty())
        <p>Вы еще не записались на услуги.</p>
    @else
        <ul>
            @foreach($user->appointments as $appointment)
                <li>
                    {{ $appointment->service->name }} - {{ $appointment->appointment_datetime }}
                    <!-- Здесь выводите другие данные записи на услугу -->
                </li>
            @endforeach
        </ul>
    @endif
    
    

@endsection
