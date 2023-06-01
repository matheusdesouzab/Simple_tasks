<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"type="text/css">
</head>

<body>
    <div id="authForm">
        <form method="POST" action="{{ route("auth.login") }}">
            @csrf
            <div class="logo">
                <h1>Simple Tasks</span></h1>
                <img src="https://www.pngall.com/wp-content/uploads/12/Green-Check-PNG-Cutout.png" alt="">
            </div>
            <p class="description">Acesse sua conta e continue organizando suas tarefas</p>
            @if (Session::get('message'))
            <span class="message-error">{{ Session::get('message') }}</span>
        @endif
            <label for="email">E-mail</label>
            <input id="email" type="email" name="email" placeholder="Digite seu e-mail" value="" />
            <label for="password">Senha</label>
            <input id="password" type="password" name="password" placeholder="Digite sua senha" value="" />
            <a href="{{ route('register') }}" style="margin-top: 10px;">Não tem uma conta? Criar agora</a>
            <button class="btn" type="submit">Acessar conta</button>
        </form>
    </div>
</body>

</html>