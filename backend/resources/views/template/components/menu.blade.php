<nav class="main-header navbar navbar-expand navbar-white navbar-light ">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item d-sm-inline-block mr-3">
            <img src="{{asset('img/logo.png')}}" alt="" width="100px">
        </li>
        <li class="nav-item d-sm-inline-block">
        </li>

    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <h1 class="m-0">@yield('titulo_pagina')</h1>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="/logout" role="button">
                <i class="fas fa-right-from-bracket"></i>
                Sair
            </a>
        </li>
    </ul>
</nav>
