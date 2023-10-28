@extends('layouts.app')
@section('page.title', 'Список клиентов')
@section('content')

<x-container>
    <x-form-card>
        <x-alert-success />

        <x-form-card-header>
            <x-form-card-title>
                {{ __('Список клиентов') }}
            </x-form-card-title>
        </x-form-card-header>

        <x-form-card-header class="text-end">
            <x-btn-black class="btn-outline-success" href="{{ route('user.create') }}">{{ __('Добавить клиента') }}</x-btn-black>
            <x-btn-black href="{{ route('admin.dashboard') }}">{{ __('Назад') }}</x-btn-black>
        </x-form-card-header>

    <x-table-responsive>
        <x-table>
            <thead>
                <tr>
                <th>Имя</th>
                <th>Email</th>
                <th>Телефон</th>
                <th>Действия</th>
                </tr>
            </thead>

        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>
                        <x-btn-black href="{{ route('user.show', $user->id) }}">{{ __('подробнее...') }}</x-btn-black>
                    </td>
                </tr>
                        @endforeach
                    </tbody>
                </x-table>
            </x-table-responsive>
        </x-form-card>
    </x-container>
@endsection