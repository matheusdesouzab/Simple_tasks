<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"type="text/css">
</head>

<body>
    <div id="authForm">
        <form method="POST" action="{{ route('auth.register') }}" id="formLogin">
            @csrf
            <div class="logo">
                <h1>Simple Tasks</span></h1>
                <img src="https://www.pngall.com/wp-content/uploads/12/Green-Check-PNG-Cutout.png" alt="">
            </div>
            <p class="description">Crie sua conta agora em nossa plataforma, e começe a organizar suas tarefas de forma
                bastante simples.</p>
            @if (Session::get('message'))
                <span class="message-success">{{ Session::get('message') }}</span>
            @endif
            <label for="email">E-mail</label>
            <input id="email" type="email" name="email" placeholder="Digite seu e-mail" />
            @error('email')
                <small class="alert-danger">{{ $message }}</small>
            @enderror
            <label for="name">Nome</label>
            <input id="name" type="text" name="name" placeholder="Digite seu nome" />
            @error('name')
                <small class="alert-danger">{{ $message }}</small>
            @enderror
            <label for="password">Senha</label>
            <input id="name" type="password" name="password" placeholder="Digite sua senha" />
            @error('password')
                <small class="alert-danger">{{ $message }}</small>
            @enderror
            <a href="{{ route('login') }}" style="margin-top: 10px;">Já possui uma conta? Acessar agora</a>
            <button class="btn" type="submit">Criar conta</button>
        </form>
    </div>

</body>

</html>
