<nav class="navbar navbar-expand-md bg-dark border-bottom border-info">
   
    <div class="container">       

        <a href="{{ route('home.index') }}" class="navbar-brand text-white">
        
            {{ config('app.name') }}
    
        </a>
     
    <!-- Этот блок будет отображаться только для аутентифицированных пользователей -->

    {{-- @if (Auth::check()) --}}

      <div class="collapse navbar-collapse " id="navbar-collapse">

        <ul class="navbar-nav me-auto mb-2 mb-md-0 ">

        <li class="nav-item ">

            <a href="{{ route('home.index') }}" class="nav-link" aria-current="page">

                {{ __('Главная') }}
            
            </a>

        </li>

        <li class="nav-item">

            <a href="{{ route('services.index') }}" class="nav-link" aria-current="page">

                {{ __('Услуги') }}
            
            </a>

        </li>

        <li class="nav-item">

            <a href="{{ route('appointments.index') }}" class="nav-link" aria-current="page">

                {{ __('Онлайн-запись') }}
            
            </a>

        </li>

        </ul>


       

        <ul class="navbar-nav ms-auto mb-2 mb-md-0">

            <li class="nav-item">
    
                <a href="{{ route('employees.index') }}" class="nav-link" aria-current="page">
    
                    {{ __('Сотрудники') }}
                
                </a>
    
            </li>
    
            <li class="nav-item">
    
                <a href="{{ route('users.index') }}" class="nav-link" aria-current="page">
    
                    {{ __('Клиенты') }}
                
                </a>
    
            </li>

        </ul>

           

            <li class="nav-item">
    
                <a href="{{ route('office.profile') }}" class="nav-link" aria-current="page">
    
                    {{ __('Личный кабинет') }}
                
                </a>
    
            </li>

        </ul>

        </div>


            {{-- @else --}}
           
                <ul class="navbar-nav ms-auto mb-2 mb-md-0">

                    <li class="nav-item">
    
                        <a href="{{ route('register.index') }}" class="nav-link {{ Route::is('login') ? 'active' : ''  }} text-white" aria-current="page">
    
                            {{ __('Регистрация') }}
                
                            </a>
    
                        </li>

                    <li class="nav-item">
    
                <a href="{{ route('login.index') }}" class="nav-link {{ Route::is('login') ? 'active' : ''  }} text-white" aria-current="page">
    
            {{ __('Войти') }}
                
        </a>
    
    </li>
    
    </ul>

{{-- @endif    --}}
    
</div>

</nav>
