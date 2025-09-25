<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid col-md-7">
            <div class="navbar-brand">Simple To Do List</div>
            
            <div class="navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Akun Saya
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @guest    
                            <li><a class="dropdown-item" href="{{ Route('login') }}">Login</a></li>
                            <li><a class="dropdown-item" href="{{ Route('auth.register') }}">Register</a></li>
                            @endguest
                            @auth
                            <li><a class="dropdown-item">{{ Auth::user()->username }}</a></li>
                            <li><a class="dropdown-item" href="{{ route('auth.delete') }}">Logout</a></li>
                            @endauth  
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>