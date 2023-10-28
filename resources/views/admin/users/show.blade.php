@extends('layouts.app')
@section('page.title', 'Информация о клиенте')
@section('content')

<x-container-6>
    <x-form-card>
        <x-form-card-header>
            <x-form-card-title>
                {{ __('Информация о клиенте:') }}
            </x-form-card-title>
                </x-form-card-header>

                    <x-form-card-body>

                    <p>Имя клиента: <strong>{{ $user->name }}</strong></p>

                    <p>Телефон клиента: <strong>{{  $user->phone }}</strong></p>

                    <p>Почта клиента: <strong>{{ $user->email }}</strong></p>
                    
                        <x-btn-black class="btn-outline-primary" href="{{ route('user.edit', $user->id) }}">{{ __('Редактировать') }}</x-btn-black>
                    {{-- <x-btn-black class="btn-outline-danger" href="{{ route('user.delete', $user->id) }}">{{ __('Удалить') }}</x-btn-black> --}}
                <x-btn-black href="{{ route('user.index') }}" class="btn btn-primary">{{ __('Назад к списку клиентов') }}</x-btn-black>
            </x-form-card-body>
    </x-form-card>
</x-container-6>
@endsection