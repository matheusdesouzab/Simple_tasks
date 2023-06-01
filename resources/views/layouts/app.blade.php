<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"type="text/css">
</head>

<body class="">
    <nav>
        <div class="logo">
            <a class="" href="">SIMPLES TASKS</a>
            <img src="https://www.pngall.com/wp-content/uploads/12/Green-Check-PNG-Cutout.png" alt="">
        </div>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('tasks.create') }}">Nova Tarefa</a></li>
            <li><a href="{{ route('tasks.index') }}">Listagem</a></li>
            <li><a onclick="document.getElementById('logout').submit()" href="#">Sair</a></li>
            <form id="logout" method="POST" action="{{ route('logout') }}">
                @csrf
            </form>
        </ul>
    </nav>

    <main id="container">
        @yield('content')
    </main>

</html>
