@extends('layouts.app')

@section('content')

    <div class="container">

        <h1>Подробности</h1>

            <div class="card">

                <div class="card-header">
            
                    {{__('Информация о сотруднике:')}}
            
                </div>
            
                <div class="card-body">
            
                    {{-- <p><strong>ID:</strong> {{ $employee->id }}</p> --}}
            
                    <p><strong>Имя:</strong> {{ $employee->name }}</p>
            
                    <p><strong>Телефон:</strong> {{ $employee->phone }}</p>
            
                    <p><strong>Специализация:</strong> {{ $employee->specialization }}</p>
            
                    <a href="{{ route('employees.index') }}" class="btn btn-primary">Назад к списку сотрудников</a>
            
                </div>
                
            </div>
            

        </div>

@endsection


    

