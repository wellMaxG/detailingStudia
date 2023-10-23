@extends('layouts.app')

@section('page.title', 'Запись на услугу')

@section('content')


    <x-container-6>

        <x-alert-success />

        @if (auth()->check())
            <!-- Проверяем, зарегистрирован ли пользователь -->
            <!-- Если пользователь зарегистрирован, скрываем поле user_id -->
            {{-- {{ Form::hidden('user_id', auth()->user()->id) }} --}}
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            {{-- @else --}}
            <!-- Если пользователь не зарегистрирован, оставляем поле user_id видимым -->
            {{-- {{ Form::label('user_id', 'User ID') }} --}}
            {{-- {{ Form::text('user_id', null, ['class' => 'form-control']) }} --}}
        @endif


        <x-form-card>
            <x-form-card-header>
                <x-form-card-title>
                    {{ __('Запись на услугу') }}
                </x-form-card-title>
            </x-form-card-header>

            <x-form-card-body>

                <x-form action="{{ route('appointments.store') }}" method="POST">
                    @csrf

                    <x-form-floating>
                        <x-form-input name="client_name" id="client_name" value="{{ old('client_name', $user->name) }}"
                            placeholder="Ваше имя:" autofocus />
                        <x-form-label required>{{ __('Введите имя:') }}</x-form-label>
                        <x-errors-form name="client_name" />
                    </x-form-floating>

                    <x-form-floating>
                        <x-form-input name="phone" id="phone" value="{{ old('phone', $user->phone) }}"
                            placeholder="Ваш телефон:" />
                        <label required>{{ __('Введите телефон:') }}</label>
                        <x-errors-form name="phone" />
                    </x-form-floating>

                    <x-form-floating>
                        <x-form-select name="service_id" id="service_id" value="{{ old('service_id') }}">
                            <option value="">...</option>
                            @foreach ($services as $service)
                                <option value="{{ $service->id }}">{{ $service->name }} </option>
                            @endforeach
                        </x-form-select>
                        <x-form-label>{{ __('Выберите услугу: *') }}</x-form-label>
                        <x-errors-form name="service_id" />
                    </x-form-floating>

                    <x-form-date-time>
                        <x-form-floating>
                            <x-form-input type="date" name="appointment_date" id="appointment_date"
                                value="{{ old('appointment_date') }}" min="{{ date('Y-m-d') }}" placeholder="Дата" />
                            <x-form-label>{{ __('Дата:') }}</x-form-label>
                            <x-errors-form name="appointment_date" />
                        </x-form-floating>

                        <x-form-floating>
                            <x-form-input type="time" name="appointment_time" id="appointment_time"
                                value="{{ old('appointment_time') }}" placeholder="Время" min="10:00" max="22:00"
                                step="7200" />
                            <x-form-label>{{ __('Время:') }}</x-form-label>
                            <x-errors-form name="appointment_time" />
                        </x-form-floating>
                    </x-form-date-time>

                    <x-form-floating>
                        <x-form-input name="question" id="question" placeholder=""
                            value="{{ old('question', $user->question) }}" />
                        <x-form-label>{{ __('Комментарий:') }}</x-form-label>
                        <x-errors-form name="question" />
                    </x-form-floating>

                    <x-btn-black-submit>{{ __('Записаться') }}</x-btn-black-submit>
                    <x-btn-cancel href="{{ route('services.index') }}">{{ __('Отмена') }}</x-btn-cancel>
                </x-form>
            </x-form-card-body>
        </x-form-card>
    </x-container-6>

    <script src="{{ mix('js/app.js') }}"></script>

@endsection
