<nav class="navbar navbar-expand-md navbar-light bg-dark shadow-s border-bottom border-info">

    <div class="container">
        <a class="navbar-brand " href="{{ url('/home') }}">
            {{ config('app.name') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                <li class="nav-item">

                    <a href="{{ url('/') }}" class="nav-link text-white" aria-current="page">
        
                        {{ __('Главная') }}
                    
                    </a>
        
                </li>

                <li class="nav-item">

                    <a href="{{ route('services.index') }}" class="nav-link text-white" aria-current="page">
        
                        {{ __('Услуги') }}
                    
                    </a>
        
                </li>

                <li class="nav-item">
        
                    <a href="{{ route('appointments.create') }}" class="nav-link text-white" aria-current="page">
        
                        {{ __('Записаться online') }}
                    
                    </a>
        
                </li>

            </ul>

            <!-- Right Side Of Navbar -->

                <ul class="navbar-nav ms-auto">              
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Вход') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="btn btn-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
            
                        <a href="{{ route('office.profile') }}" class="dropdown-item" aria-current="page">
            
                            {{ __('Личный кабинет') }}
                        
                        </a>
                   
                            <a class="dropdown-item" href="{{ route('logout') }}"

                               onclick="event.preventDefault();
                               
                                             document.getElementById('logout-form').submit();">

                                {{ __('Выход') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    
                            <li class="nav-item">

                            @if(auth()->user()->role === 'admin')

                                <a href="{{ route('admin.dashboard') }}" class="btn btn-primary ">Административная панель</a>

                            </li>

                            @endif
                    </li>

                @endguest
       
            </ul>
        </div>
    </div>
</nav>