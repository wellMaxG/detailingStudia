@extends('layouts.app')
@section('page.title', 'Изменение услуги')
@section('content')
<x-container-6>
        <x-alert-success />
        <x-validation-errors />

        <x-form-card>
            <x-form-card-header>
                <x-form-card-title>
                    {{ __('Редактировать услугу:') }}
                </x-form-card-title>
            </x-form-card-header>

            <x-form-card-body>

    <x-form action="{{ route('service.update', $service->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <x-form-floating>
                        <x-form-input name="name" id="name"  placeholder="Ваше имя:"
                        value="{{ old('name', $service->name) }}" autofocus />
                        <x-form-label required>{{ __('Название услуги:') }}</x-form-label>
                        <x-errors-form name="name" />
                    </x-form-floating>

                    <x-form-floating>
                        <x-form-input name="description" id="description"  placeholder="Ваше имя:"
                        value="{{ old('description', $service->description) }}" />
                        <x-form-label required>{{ __('Описание услуги:') }}</x-form-label>
                        <x-errors-form name="description" />
                    </x-form-floating>

                    <x-form-floating>
                        <x-form-input type="number" name="price" id="price"  placeholder="Ваше имя:"
                        value="{{ old('price', $service->price) }}" />
                        <x-form-label required>{{ __('Стоимость услуги:') }}</x-form-label>
                        <x-errors-form name="price" />
                    </x-form-floating>

                    <x-form-floating>
                        <x-form-input name="duration_minutes" id="duration_minutes"  placeholder="Ваше имя:"
                        value="{{ old('duration_minutes', $service->duration_minutes) }}" />
                        <x-form-label required>{{ __('Длительность услуги:') }}</x-form-label>
                        <x-errors-form name="price" />
                    </x-form-floating>
      
                    <div class="d-flex mb-2">
                        <p class="me-2">Изменение изображения: </p>
                        <label for="image_url" class="custom-file-upload">{{ __('Выбрать файл') }}</label>
                        <input type="file" id="image_url" name="image_url" value="{{ $service->image_url }}">
                </div>

                        <x-btn-black-submit>{{ __('Сохранить изменения') }}</x-btn-black-submit>
                    <x-btn-cancel href="{{ route('service.show', $service->id) }}">{{ __('Отмена') }}</x-btn-cancel>
                </x-form>
            </x-form-card-body>
        </x-form-card>
    </x-container-6>
@endsection