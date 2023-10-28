<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script>
  $(document).ready(function() {
    $('#phone').mask('9 (999) 999-9999');
  });
</script>

@extends('layouts.app')
@section('page.title', 'Административная панель, добавление нового сотрудника')
@section('content')

<x-container-6>
    <x-alert-success />

    <x-form-card>
        <x-form-card-header>
            <x-form-card-title>
                {{ __('Добавить нового сотрудника') }}
            </x-form-card-title>
        </x-form-card-header>

<x-form-card-body>
    <x-validation-errors />

    <x-form method="POST" action="{{ route('employee.store') }}">
        @csrf

        <x-form-floating>
            <x-form-input name="name" id="name" placeholder="Ваше имя:"
                value="{{ old('name') }}" autofocus />
            <x-form-label required>{{ __('Введите имя:') }}</x-form-label>
            <x-errors-form name="name" />
        </x-form-floating>

        <x-form-floating>
            <x-form-input type="tel" name="phone" id="phone" placeholder="Ваш телефон:"
                value=""/>
            <x-form-label required>{{ __('Телефон:') }}</x-form-label>
            <x-errors-form name="phone" />
        </x-form-floating>
        
        <x-form-floating>
            <x-form-input type="tel" name="specialization" id="specialization" placeholder="Ваш телефон:"
                value=""/>
            <x-form-label required>{{ __('Должность:') }}</x-form-label>
            <x-errors-form name="phone" />
        </x-form-floating>

        <x-btn-black-submit>{{ __('Создать сотрудника') }}</x-btn-black-submit>
        <x-btn-cancel href="{{ route('employee.index') }}">{{ __('Отмена') }}</x-btn-cancel>
    </x-form>
</x-form-card-body>
</x-form-card>
</x-container-6>
@endsection
