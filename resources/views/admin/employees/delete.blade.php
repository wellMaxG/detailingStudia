@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Удаление сотрудника</h1>

        <p>Вы уверены, что хотите удалить сотрудника "{{ $employee->name }}"?</p>

        <form method="POST" action="{{ route('employee.delete', $employee->id) }}">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger">Удалить</button>
            <a href="{{ route('employee.index') }}" class="btn btn-secondary">Отмена</a>
        </form>
    </div>
@endsection

