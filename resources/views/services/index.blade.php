@extends('layouts.app')
@section('page.title', 'Страница услуг')
@section('content')

<x-alert-success />
  <h1 class="my-4 mb-3">{{ __('Новая жизнь Вашего автомобиля в наших услугах') }}</h1>
    <div class="container">
        <div class="row">
            @foreach ($services as $service)
                <div class="col-12 col-md-3 mb-3 my-3">
                    <a class="service-card-animation" href="{{ route('services.show', $service->id) }}">
                        <div class="service-card" style="background-image: url('{{ asset($service->image_url) }}')">
                            <div class="service-tint-card-bg">
                                <div class="service-card-body">
                                    <div class="service-card-header">
                                  <h4 class="service-card-title">{{ $service->name }}</h4>
                              </div>
                          </div>
                      </div>
                    </a>
                </div>
              <div class="service-card-footer">
              <x-btn-black href="{{ route('appointments.create') }}">{{ __('Записаться') }}</x-btn-black>
          </div>
      </div>
    @endforeach
  </div>
@endsection
