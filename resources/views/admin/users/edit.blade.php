<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script>
  $(document).ready(function() {
    $('#phone').mask('9 (999) 999-9999');
  });
</script>

@extends('layouts.app')
@section('page.title', 'Изменение информации о клиенте')
@section('content')

    <x-container-6>
        <x-alert-success />
        <x-validation-errors />
        <x-form-card>
            <x-form-card-header>
                <x-form-card-title>
                    {{ __('Редактирование данных о клиенте') }}
                </x-form-card-title>
            </x-form-card-header>

            <x-form-card-body>
                <x-form method="POST" action="{{ route('user.update', $user->id) }}">
                    @csrf
                    @method('PUT')

        <x-form-floating>
            <x-form-input name="name" id="name" placeholder="Ваше имя:"
                value="{{ old('name', $user->name) }}" autofocus />
            <x-form-label required>{{ __('Введите имя:') }}</x-form-label>
            <x-errors-form name="name" />
        </x-form-floating>

        <x-form-floating>
            <x-form-input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" />
            <x-form-label required>{{ __('Введите Email:') }}</x-form-label>
            <x-errors-form name="email" />
        </x-form-floating>

        <x-form-floating>
            <x-form-input name="phone" id="phone" value="{{ old('phone', $user->phone) }}" />
            <x-form-label required>{{ __('Введите телефон:') }}</x-form-label>
            <x-errors-form name="phone" />
        </x-form-floating>

                        <x-btn-black-submit>{{ __('Сохранить изменения') }}</x-btn-black-submit>
                    <x-btn-cancel href="{{ route('user.show', $user->id) }}">{{ __('Отмена') }}</x-btn-cancel>
                </x-form>
            </x-form-card-body>
        </x-form-card>
    </x-container-6>
@endsection