@extends('layouts.app')

@section('content')

<x-container-6>
    <x-form-card>
        <x-form-card-header>
            <x-form-card-title>
                {{ __('Удаление записи') }}
            </x-form-card-title>
                </x-form-card-header>
                
                    <x-form-card-body>

                        <p>Вы уверены, что хотите удалить запись "{{ $appointment->service->name }}" для клиента {{ $appointment->client_name }}?</p>
                        <x-form action="{{ route('appointment.delete', $appointment->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <x-btn-black-submit class="btn-outline-danger">Удалить</x-btn-black-submit>
                            <x-btn-black href="{{ route('appointment.index') }}">Отмена</x-btn-black>
                        </x-form>

                </x-form-card-body>
        </x-form-card>
    </x-container-6>
@endsection