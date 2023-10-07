@extends('layouts.app')

@section('content')

<x-span-success />

    <div class="container">

        <h1>Личный кабинет</h1>

        <p>Имя: {{ $user->name }}</p>

        <p>Email: {{ $user->email }}</p>
        
        <p>Phone: {{ $user->phone }}</p>
        
        <p>ID: {{ $user->id }}</p>

        <x-span-bt-create href="{{ route('home') }}">Назад</x-span-bt-create>

    </div>

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
