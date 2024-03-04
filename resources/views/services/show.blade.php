@extends('layouts.app')
@section('page.title', 'Информация о услуге')
@section('content')

<x-container-6>
    <x-form-card>
        <x-form-card-header>
            <x-form-card-title>
                {{ __('Информация о услуге:') }}
            </x-form-card-title>
        </x-form-card-header>

            <x-form-card-body>

                <p>{{ $service->description }}</p>

                <p>Стоимость: <strong>{{ $service->price }} ₽</strong></p>

                <p>Длительность: <strong>{{ $service->duration_minutes }}</strong></p>

                <x-btn-black href="{{ route('appointments.create') }}">{{ __('Записаться') }}</x-btn-black>

                <x-btn-black href="{{ route('services.index') }}">{{ __('Назад к списку услуг') }}</x-btn-black>

            </x-form-card-body>
        </x-form-card>
    </x-container-6>
@endsection
