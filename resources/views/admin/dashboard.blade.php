@extends('layouts.app')
@section('page.title','Административная панель')
@section('content')

<div class="container">
        <x-alert-success />
        
        <h5 class="mb-3">{{ __('Добро пожаловать в административную панель!') }}</h5>

        <div class="row">

            <div class="col-12 col-md-3">

                <div class="card text-white dashboard-card mb-3">

                    <div class="card-header p-1" >

                        <div class="d-flex">
                            
                            <div class="p-1"><img class="icon" src="{{ asset('img/clients.png') }}" alt="Клиенты"></div>
                            
                            <div class="p-1 mt-1" >{{ __('Клиенты') }}</div>
                          
                        </div>

                    </div>
                        
                    <div class="card-body">

                        <p class="card-text">{{ __('Список клиентов с возможностью добавление, редактирования, удаления.') }}</p>
                        

                        <x-btn-black class="btn-outline-primary" href="{{ route('user.index') }}">{{ __('Подробнее...') }}</x-btn-black>

                    </div>

                </div>
                
            </div>

            <div class="col-12 col-md-3">

                <div class="card text-white dashboard-card mb-2">

                    <div class="card-header p-1">

                        <div class="d-flex">
                            
                            <div class="p-1"><img class="icon" src="{{ asset('img/employ.png') }}" alt="Сотрудники"></div>
                            
                            <div class="p-1 mt-1">{{ __('Сотрудники') }}</div>
                          
                        </div>

                  </div>

                    <div class="card-body">      

                        <p class="card-text" >{{ __('Список сотрудников с возможностью добавление, редактирования, удаления.') }}</p>



                        <x-btn-black class="btn-outline-primary" href="{{ route('employee.index') }}">{{ __('Подробнее...') }}</x-btn-black>

                    </div>

                </div>
                
            </div>

            
            <div class="col-12 col-md-3">

                <div class="card text-white dashboard-card mb-2">

                    <div class="card-header p-1">

                        <div class="d-flex">
                            
                            <div class="p-1"><img class="icon" src="{{ asset('img/1.png') }}" alt="Услуги"></div>
                            
                            <div class="p-1 mt-1">{{ __('Услуги') }}</div>
                          
                        </div>
                    </div>

                    <div class="card-body">   

                        <p class="card-text">{{ __('Перечень услуг с возможностью добавление, редактирования, удаления.') }}</p>

                        <x-btn-black class="btn-outline-primary" href="{{ route('service.index') }}">{{ __('Подробнее...') }}</x-btn-black>

                    </div>

                </div>
                
            </div>

            <div class="col-12 col-md-3">

                <div class="card text-white dashboard-card mb-3">

                    <div class="card-header p-1">

                        <div class="d-flex">
                            
                            <div class="p-1"><img class="icon" src="{{ asset('img/appoint.png') }}" alt="Записи"></div>
                            
                            <div class="p-1 mt-1">{{ __('Записи на услуги') }}</div>
                          
                        </div>
                    </div>

                    <div class="card-body"> 

                        <p class="card-text">{{ __('Перечень записей с возможностью добавление, редактирования, удаления.') }}</p>

                        <x-btn-black class="btn-outline-primary" href="{{ route('appointment.index') }}">{{ __('Подробнее...') }}</x-btn-black>
                    </div>

                </div>
                
            </div>

            </div>

        </div>


@endsection
