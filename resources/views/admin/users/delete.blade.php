@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Удаление клиента</h1>

        <p>Вы уверены, что хотите удалить клиента "{{ $user->name }}"?</p>

        <form method="POST" action="{{ route('user.delete', $user->id) }}">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger">Удалить</button>
            <a href="{{ route('user.index') }}" class="btn btn-secondary">Отмена</a>
        </form>
    </div>
@endsection