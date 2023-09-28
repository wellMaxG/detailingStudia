@extends('layouts.app')

@section('content')

    <div class="container">

        <h1>Подробности</h1>

            <div class="card">

                <div class="card-header">
            
                    {{__('Информация о клиенте:')}}
            
                </div>
            
                <div class="card-body">
            
                    {{-- <p><strong>ID:</strong> {{ $client->id }}</p> --}}
            
                    <p><strong>Имя:</strong> {{ $user->name }}</p>
            
                    <p><strong>Телефон:</strong> {{ $user->phone }}</p>
            
                    <p><strong>Email:</strong> {{ $user->email }}</p>
            
                    <a href="{{ route('admin.index') }}" class="btn btn-primary">Назад к списку клиентов</a>
            
                </div>
                
            </div>
    
        </div>

@endsection
