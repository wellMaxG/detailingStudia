<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script>
  $(document).ready(function() {
    $('#phone').mask('9 (999) 999-9999');
  });
</script>

@extends('layouts.app')
@section('page.title', 'Административная панель, регистрация нового клиента')
@section('content')

<x-container-6>
    <x-alert-success />

    <x-form-card>
        <x-form-card-header>
            <x-form-card-title>
                {{ __('Зарегистрировать нового клиента') }}
            </x-form-card-title>
        </x-form-card-header>

<x-form-card-body>   
    <x-form method="POST" action="{{ route('user.store') }}">
        @csrf
        <x-form-floating>
            <x-form-input name="name" id="name" placeholder="Ваше имя:"
                value="{{ old('name') }}" autofocus />
            <x-form-label required>{{ __('Введите имя:') }}</x-form-label>
            <x-errors-form name="name" />
        </x-form-floating>

        <x-form-floating>
            <x-form-input type="email" name="email" id="email" placeholder="Ваша почту:"
                value="{{ old('email') }}"/>
            <x-form-label required>{{ __('Введите Email:') }}</x-form-label>
            <x-errors-form name="email" />
        </x-form-floating>

        <x-form-floating>
            <x-form-input name="phone" id="phone" placeholder="Ваш телефон:"
                value=""/>
            <x-form-label required>{{ __('Телефон:') }}</x-form-label>
            <x-errors-form name="phone" />
        </x-form-floating>

        <x-form-floating>
            <x-form-input name="password" id="password" placeholder="Ваш Пароль:"
                value=""/>
            <x-form-label required>{{ __('Пароль:') }}</x-form-label>
            <x-errors-form name="password" />
        </x-form-floating>

        <x-btn-black-submit>{{ __('Зарегистрировать клиента') }}</x-btn-black-submit>
        <x-btn-cancel href="{{ route('user.index') }}">{{ __('Отмена') }}</x-btn-cancel>
    </x-form>
</x-form-card-body>
</x-form-card>
</x-container-6>
@endsection