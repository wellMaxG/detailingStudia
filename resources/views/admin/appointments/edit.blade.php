@extends('layouts.app')

@section('content')

    <x-container-6>
        <x-alert-success />

        <x-form-card>
            <x-form-card-header>
                <x-form-card-title>
                    {{ __('Записать клиента на услугу') }}
                </x-form-card-title>
            </x-form-card-header>

            <x-form-card-body>

                <x-form action="{{ route('appointment.update', $appointment->id) }}" method="POST">
                    @csrf
                    @method('PUT')
            
                    <x-form-floating>
                        <x-form-input name="client_name" id="client_name" placeholder="Ваше имя:"
                            value="{{ old('client_name', $appointment->client_name) }}" autofocus />
                        <x-form-label required>{{ __('Введите имя:') }}</x-form-label>
                        <x-errors-form name="client_name" />
                    </x-form-floating>

                    <x-form-floating>
                        <x-form-input name="phone" id="phone" value="{{ old('phone', $appointment->phone) }}" />
                        <x-form-label required>{{ __('Введите телефон:') }}</x-form-label>
                        <x-errors-form name="phone" />
                    </x-form-floating>

                    <x-form-floating>
                        <x-form-select name="service_id" id="service_id">
                            <option value="">...</option>
                            @foreach ($services as $service)
                                <option value="{{ $service->id }}"{{ $appointment->service_id == $service->id ? 'selected' : '' }}>{{ $service->name }}</option>
                            @endforeach
                        </x-form-select>
                        <x-form-label>{{ __('Выберите услугу:') }}</x-form-label>
                        <x-errors-form name="service_id" />
                    </x-form-floating>

                    <x-form-date-time>
                        <x-form-floating>
                            <x-form-input type="date" name="appointment_date" id="appointment_date"
                                value="{{ old('appointment_date',$appointment->appointment_date) }}" min="{{ date('Y-m-d') }}" placeholder="Дата" />
                            <x-form-label>{{ __('Дата:') }}</x-form-label>
                            <x-errors-form name="appointment_date" />
                        </x-form-floating>

                        <x-form-floating>
                            <input class="form-control" type="time" name="appointment_time" id="appointment_time"
                                value="{{ old('appointment_time', $appointment->appointment_time) }}" placeholder="Время" min="10:00" max="22:00"
                                step="7200">
                            <x-form-label>{{ __('Время:') }}</x-form-label>
                            <x-errors-form name="appointment_time" />
                        </x-form-floating>
                    </x-form-date-time>

                    @if (auth()->user()->isAdmin())
                        <x-form-floating>
                            <x-form-select name="status" id="status">
                                <option value="Запланировано">Запланировано</option>
                                <option value="В процессе">В процессе</option>
                                <option value="Завершено">Завершено</option>
                            </x-form-select>
                            <x-form-label>{{ __('Статус:') }}</x-form-label>
                        </x-form-floating>
                    @endif

                    <x-btn-black-submit>{{ __('Сохранить изменения') }}</x-btn-black-submit>
                    <x-btn-cancel href="{{ route('appointment.show', $appointment->id) }}">{{ __('Отмена') }}</x-btn-cancel>
                </x-form>
            </x-form-card-body>
        </x-form-card>
    </x-container-6>
    <script src="{{ mix('js/app.js') }}"></script>
@endsection
