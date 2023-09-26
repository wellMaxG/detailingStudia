@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Удаление услуги</h1>

        <p>Вы уверены, что хотите удалить услугу "{{ $service->name }}"?</p>

        <form method="POST" action="{{ route('services.delete', $service->id) }}">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger">Удалить</button>
            <a href="{{ route('services.index') }}" class="btn btn-secondary">Отмена</a>
        </form>
    </div>
@endsection

