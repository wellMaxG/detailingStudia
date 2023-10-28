@extends('layouts.app')
@section('page.title', 'Информация о сотруднике')
@section('content')

<x-container-6>
    <x-form-card>

        <x-form-card-header>
            <x-form-card-title>
                {{ __('Информация о сотруднике:') }}
            </x-form-card-title>
                </x-form-card-header>

                <x-form-card-body>

                    <p>Имя сотрудника: <strong>{{ $employee->name }}</strong></p>

                    <p>Телефон сотрудника: <strong>{{ $employee->phone }}</strong></p>

                    <p>Должность: <strong>{{ $employee->specialization }}</strong></p>
            
                        <x-btn-black class="btn-outline-primary" href="{{ route('employee.edit', $employee->id) }}">{{ __('Редактировать') }}</x-btn-black>
                    <x-btn-black class="btn-outline-danger" href="{{ route('employee.delete', $employee->id) }}">{{ __('Удалить') }}</x-btn-black>
                <x-btn-black href="{{ route('employee.index') }}" class="btn btn-primary">{{ __('Назад к списку записей') }}</x-btn-black>
            </x-form-card-body>
    </x-form-card>
</x-container-6>
@endsection


    

