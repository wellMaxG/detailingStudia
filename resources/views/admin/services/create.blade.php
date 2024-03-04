@extends('layouts.app')
@section('page.title', 'Административная панель, добавление услуг')
@section('content')

<x-container-6>
        <x-alert-success />
        <x-validation-errors />

        <x-form-card>
            <x-form-card-header>
                <x-form-card-title>
                    {{ __('Создать новую услугу') }}
                </x-form-card-title>
            </x-form-card-header>

            <x-form-card-body>
    <x-form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <x-form-floating>
            <x-form-input name="name" id="name" placeholder="Ваше имя:"
                value="{{ old('name') }}" autofocus />
                    <x-form-label required>{{ __('Название услуги:') }}</x-form-label>
                     <x-errors-form name="name" />
        </x-form-floating>
        
        <x-form-floating>
            <x-form-input type="number" name="price" id="price" placeholder="Ваше имя:"
                value="{{ old('price') }}" />
                    <x-form-label required>{{ __('Стоимость:') }}</x-form-label>
                     <x-errors-form name="price" />
        </x-form-floating>

        <x-form-floating>
            <x-form-input name="duration_minutes" id="duration_minutes" placeholder="Ваше имя:"
                value="{{ old('duration_minutes') }}" />
                    <x-form-label required>{{ __('Длительность:') }}</x-form-label>
                     <x-errors-form name="duration_minutes" />
        </x-form-floating>

        <div class="form-group mb-2">
            <textarea type="text" class="form-control" placeholder="Описание услуги: *" name="description" id="description" rows="5" value="{{ old('description') }}"></textarea>
            <x-errors-form name="description" />
        </div>

                        <x-btn-black-submit>{{ __('Создать услугу') }}</x-btn-black-submit>
                    <x-btn-cancel href="{{ route('service.index') }}">{{ __('Отмена') }}</x-btn-cancel>
                </x-form>
            </x-form-card-body>
        </x-form-card>
    </x-container-6>
@endsection