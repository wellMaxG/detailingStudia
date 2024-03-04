<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script>
  $(document).ready(function() {
    $('#phone').mask('9 (999) 999-9999');
  });
</script>

@extends('layouts.app')
@section('page.title', 'Изменение информации о сотруднике')
@section('content')

<x-container-6>
    <x-alert-success />
    <x-validation-errors />
    <x-form-card>
        <x-form-card-header>
            <x-form-card-title>
                {{ __('Редактирование данных о сотруднике') }}
            </x-form-card-title>
        </x-form-card-header>

        <x-form-card-body>

    <x-form method="POST" action="{{ route('employee.update', $employee->id) }}">
        @csrf
        @method('PUT')

        {{-- <div class="form-group">
            <label for="name">Имя</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $employee->name) }}">
        </div>

        <div class="form-group">
            <label for="phone">Телефон</label>
            <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone', $employee->phone) }}">
        </div> --}}

        {{-- <div class="form-group">
            <label for="specialization">Специализация</label>
            <input type="specialization" class="form-control" name="specialization" id="specialization" value="{{ old('specialization', $employee->specialization) }}">
        </div> --}}

        <x-form-floating>
            <x-form-input name="name" id="name" placeholder="Ваше имя:"
                value="{{ old('name', $employee->name) }}" autofocus />
            <x-form-label required>{{ __('Введите имя:') }}</x-form-label>
            <x-errors-form name="name" />
        </x-form-floating>

        <x-form-floating>
            <x-form-input name="phone" id="phone" value="{{ old('phone', $employee->phone) }}" />
            <x-form-label required>{{ __('Введите телефон:') }}</x-form-label>
            <x-errors-form name="phone" />
        </x-form-floating>

        <x-form-floating>
            <x-form-input name="specialization" id="specialization" value="{{ old('specialization', $employee->specialization) }}" />
            <x-form-label required>{{ __('Должность:') }}</x-form-label>
            <x-errors-form name="specialization" />
        </x-form-floating>
        

                        <x-btn-black-submit>{{ __('Сохранить изменения') }}</x-btn-black-submit>
                    <x-btn-cancel href="{{ route('employee.show', $employee->id) }}">{{ __('Отмена') }}</x-btn-cancel>
                </x-form>
            </x-form-card-body>
        </x-form-card>
    </x-container-6>
@endsection
