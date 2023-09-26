@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Личный кабинет</h1>
        <p>Имя: {{ $user->name }}</p>
        <p>Email: {{ $user->email }}</p>

        {{-- <form action="{{ route('home.index') }}" method="POST" class="d-flex" role="search">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Выход</button>
            </form> --}}

            {{-- <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Выход</button>
            </form>
             --}}
        <!-- Другие поля профиля -->
    </div>
@endsection
