@extends('layouts.app')

@section('content')

    <div class="container">
        
        <h5 class="mb-3">Добро пожаловать в административную панель!</h5>

        <div class="row">

            <div class="col-12 col-md-3">

                <div class="card mb-3">

                    <div class="card-header">Клиенты</div>

                    <div class="card-body">

                        <p class="card-text">Перечень клиентов с возможностью добавление, редактирования, удаления.</p>

                        <x-span-bt-edit href="{{ route('user.index') }}" class="btn btn-primary">Подробнее...</x-span-bt-edit>

                    </div>

                </div>
                
            </div>

            <div class="col-12 col-md-3">

                <div class="card mb-3">

                    <div class="card-header">Сотрудники</div>

                    <div class="card-body">      

                        <p class="card-text">Перечень сотрудников с возможностью добавление, редактирования, удаления.</p>

                        <x-span-bt-edit href="{{ route('employee.index') }}" class="btn btn-primary">Подробнее...</x-span-bt-edit>

                    </div>

                </div>
                
            </div>

            
            <div class="col-12 col-md-3">

                <div class="card mb-3">

                    <div class="card-header">Услуги</div>

                    <div class="card-body">   

                        <p class="card-text">Перечень услуг с возможностью добавление, редактирования, удаления.</p>

                        <x-span-bt-edit href="{{ route('service.index') }}" class="btn btn-primary">Подробнее...</x-span-bt-edit>

                    </div>

                </div>
                
            </div>

            <div class="col-12 col-md-3">

                <div class="card mb-3">

                    <div class="card-header">Записи на услуги</div>

                    <div class="card-body">    
                        <p class="card-text">Перечень записей с возможностью добавление, редактирования, удаления.</p>

                        <x-span-bt-edit href="{{ route('appointment.index') }}" class="btn btn-primary">Подробнее...</x-span-bt-edit>
                    </div>

                </div>
                
            </div>


            </div>

        </div>

    </div>

@endsection
