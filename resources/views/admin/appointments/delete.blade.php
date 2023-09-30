@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Удаление записи</h1>

        <p>Вы уверены, что хотите удалить запись "{{ $appointment->service->name }}" для клиента {{ $appointment->client_name }}?</p>

        <form method="POST" action="{{ route('appointment.delete', $appointment->id) }}">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger">Удалить</button>
            <a href="{{ route('appointment.index') }}" class="btn btn-secondary">Отмена</a>
        </form>
    </div>
@endsection