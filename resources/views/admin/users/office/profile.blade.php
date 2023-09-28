@extends('layouts.app')

@section('content')

    <div class="container">

        <h1>Личный кабинет</h1>

        <p>Имя: {{ $user->name }}</p>

        <p>Email: {{ $user->email }}</p>
        
        <p>Phone: {{ $user->phone }}</p>

        <x-span-bt-create href="{{ route('home') }}">Назад</x-span-bt-create>

    </div>

@endsection
