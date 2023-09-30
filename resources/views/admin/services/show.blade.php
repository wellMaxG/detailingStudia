@extends('layouts.app')

@section('content')

<div class="container">

    <h1>Подробности</h1>

    <div class="card">

        <div class="card-header">
    
            {{__('Информация о услуге:')}}
    
        </div>


    <div class="card-body">

    <p><strong>Название:</strong> {{ $service->name }}</p>

    <p><strong>Описание:</strong> {{ $service->description }}</p>

    <p><strong>Стоимость:</strong> {{ $service->price }}₽</p>

    <p><strong>Длительность:</strong> {{ $service->duration_minutes }}</p>

    <a href="{{ route('service.index') }}" class="btn btn-primary">Назад к списку услуг</a>

    
</div>
                
</div>

</div>

@endsection


        

            
              
            
                  
            

            
