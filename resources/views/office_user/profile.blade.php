@extends('layouts.app')

@section('page.title', 'Личный кабинет')

@section('content')

    <x-container>

        <x-form-card class="p-1">
            <x-form-card-header>
                <x-form-card-title>
                    <div class="d-flex justify-content-between">
                        {{ __('Личный кабинет') }}
                        <x-bt-on-head href="{{ route('home.index') }}">{{ __('На главную') }}</x-bt-on-head>
                    </div>
                </x-form-card-title>
            </x-form-card-header>
            <div class="row">
                <div class="col">

                    <x-form-card class="border-black">

                        <div class="row">
                            <form action="{{ route('avatar.upload') }}" method="POST" enctype="multipart/form-data">
                                <x-alert-success />
                                @csrf
                                <img class="avatar m-2" src="{{ asset(auth()->user()->avatar) }}" alt="Аватар пользователя">
                                <div class="d-flex justify-content-center">
                                    <input type="file" id="avatar" name="avatar">
                                    <label for="avatar" class="custom-file-upload">{{ __('Выбрать файл') }}</label>
                                </div>

                                <div class="col-md-12 text-start">
                        <div class="card-body">
                            <ul>
                                <li><strong>Имя:</strong> {{ $user->name }}</li>
                                <hr>
                                <li><strong>Email:</strong> {{ $user->email }}</li>
                                <li><strong>Телефон:</strong> {{ $user->phone }}</li>
                                <li><strong>Ваша скидка на услуги:</strong>{{ __(' 3%') }}</li>
                            </ul>
                                        <div class="d-flex justify-content-end">
                                            <x-btn-black class="btn-sm me-1 btn-outline-success"
                                            href="{{ route('office.editProfile') }}">{{ __('Редактировать') }}</x-btn-black>
                                            <x-btn-black-submit
                                            class="btn-sm">{{ __('Сохранить изменения') }}</x-btn-black-submit>
                                        </div>
                            </form>
                        </div>
                </div>
            </x-form-card>
        </div>
        </div>

        <div class="col text-start">
            <x-form-card class="border-black">
                <x-form-card-header>
                    <x-form-card-title>
                        {{ __('Ваши записи на услуги:') }}
                    </x-form-card-title>
                </x-form-card-header>
                @if ($user->appointments->isEmpty())
                <ul>
                    <li>
                        <p>Вы еще не записались на услуги.</p>
                    </li>
                </ul>
                @else
                    <ul>
                        @foreach ($user->appointments as $appointment)
                            <li>
                                {{ $appointment->service->name }}
                                {{ date('d-m-Y', strtotime($appointment->appointment_date)) }} 
                                {{ date('H:i', strtotime( $appointment->appointment_time)) }}
                            </li>
                        @endforeach
                    </ul>
                @endif
            </x-form-card>

            <x-form-card class="border-black">
                <x-form-card-header>
                    <x-form-card-title>
                        {{ __('Ваши платежи:') }}
                    </x-form-card-title>
                </x-form-card-header>
                    <ul>
                        <li>
                            <p>Информация по платежам отсутствует.</p>
                        </li>
                    </ul>
            </x-form-card>
            <x-form-card class="border-black">
                <x-form-card-header>
                    <x-form-card-title>
                        {{ __('История:') }}
                    </x-form-card-title>
                </x-form-card-header>
                    <ul>
                        <li>
                            <p>История отсутствует.</p>
                        </li>
                    </ul>
            </x-form-card>
            <x-form-card class="border-black">
                <x-form-card-header>
                    <x-form-card-title>
                        {{ __('Дополнительная информация:') }}
                    </x-form-card-title>
                </x-form-card-header>
                    <ul>
                        <li>
                            <p>Информация отсутствует.</p>
                        </li>
                    </ul>
            </x-form-card>
        </div>


        </x-form-card>
    </x-container>
@endsection
