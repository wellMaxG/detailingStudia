@extends('layouts.app')
@section('page.title', 'Информация о услуге')
@section('content')

<!-- <div class="container">

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

    <p><strong>Фото:</strong><img src="{{ $service->image_url }}" alt=""></p>
    

    <a href="{{ route('service.index') }}" class="btn btn-primary">Назад к списку услуг</a>

    
</div>
                
</div>

</div> -->
<x-container-6>
    <x-form-card>

        <x-form-card-header>
            <x-form-card-title>
            {{__('Информация о услуге:')}}
            </x-form-card-title>
                </x-form-card-header>

                    <x-form-card-body>


                    <p>Название: <strong>{{ $service->name }}</strong></p>
                    
                    <p>Описание: <strong>{{ $service->description }}</strong></p>
                    
                    <p>Стоимость: <strong>{{ $service->price }}</strong></p>
                    
                    <p>Длительность: <strong>{{ $service->duration_minutes }}</strong></p>
                    
                    <p><img class="serviceImg" src="{{ $service->image_url }}" alt=""></p>

                    <x-btn-black class="btn-outline-primary" href="{{ route('service.edit', $service->id) }}">Редактировать</x-btn-black>
                    <x-btn-black class="btn-outline-danger" href="{{ route('service.delete', $service->id) }}">Удалить</x-x-btn-black>
                    <x-btn-black href="{{ route('service.index') }}" class="btn btn-primary">{{ __('Назад к списку записей') }}</x-btn-black>

                </x-form-card-body>
            </x-form-card>
        </x-container-6>
        
        @endsection




            
              
            
                  
            

            
