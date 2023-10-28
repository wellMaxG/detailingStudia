@extends('layouts.app')
@section('page.title', 'Список записей на услуги')
@section('content')

    <x-container>
        <x-form-card>
            <x-alert-success />

            <x-form-card-header>
                <x-form-card-title>
                    {{ __('Запись клиента на услугу') }}
                </x-form-card-title>
            </x-form-card-header>

            <x-form-card-header class="text-end">
                <x-btn-black class="btn-outline-success" href="{{ route('appointment.create') }}">{{ __('Добавить запись') }}</x-btn-black>
                <x-btn-black href="{{ route('admin.dashboard') }}">{{ __('Назад') }}</x-btn-black>
            </x-form-card-header>

<x-table-responsive>
    <x-table>
        <thead>
            <tr>
                <th>{{ __('Клиент...') }}</th>
                <th>{{ __('Услуга...') }}</th>
                <th>{{ __('Телефон...') }}</th>
                <th>{{ __('Дата и время...') }}</th>
                <th>{{ __('Статус...') }}</th>
                <th>{{ __('Вопрос клиента...') }}</th>
                <th>{{ __('Действия...') }}</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($appointments as $appointment)
                <tr>                   
                    <td>{{ $appointment->client_name }} </td>
                    <td>{{ $appointment->service->name }}</td>
                    <td>{{ ($appointment->phone) }}</td>
                    <td>{{ date('d-m-Y', strtotime($appointment->appointment_date)) }} {{ date('H:i', strtotime( $appointment->appointment_time)) }}</td>
                    <td>{{ $appointment->status }}</td>
                    <td>{{ $appointment->question }}</td>
                    <td>
                    <x-btn-black class="btn-outline-success btn-sm" href="{{ route('appointment.show', $appointment->id) }}">{{ __('подробнее...') }}</x-btn-black>
                    </td>
                </tr>
            @endforeach
                    </tbody>
                </x-table>
            </x-table-responsive>
        </x-form-card>
    </x-container>
@endsection


