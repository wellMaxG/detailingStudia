@extends('layouts.app')
@section('page.title', 'Контакты компании')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <x-form-card>
                    <x-form-card-header>
                        <x-form-card-title>
                            <div class="d-flex justify-content-between me-3 ms-2">
                                {{ __('Контакты детейлинг сервиса') }}
                                <x-bt-on-head href="{{ route('home.index') }}">{{ __('На главную') }}</x-bt-on-head>
                            </div>
                        </x-form-card-title>
                    </x-form-card-header>
                        <div class="card-body">
                            <p>Если у вас есть какие-либо вопросы или предложения, пожалуйста, свяжитесь с нами:</p>
                            <ul>
                                <li><strong>Адрес:</strong> Улица Сервисная, 123</li>
                                <li><strong>Телефон:</strong> +7 (123) 456-7890</li>
                                <li><strong>Email:</strong> info@detailingservice.com</li>
                            </ul>
                </x-form-card>
            </div>
        </div>
    </div>
</div>
@endsection
