<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./assets/css/app.css">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    <div id="app" class="flex">
        <!--MENU DESKTOP-->
        <div id="menu" class="flex column justify-center vh-100" style="background-color: green; color:white;">
            <a href="/"><img src="../assets/img/home-branco.png" alt="inicio" style="width:35px; margin-top:7px; margin-bottom:7px; padding:5px;"></a>
            <a href=""><img src="../assets/img/perfil-branco.png" alt="usuário" style="width:35px; margin-top:7px; margin-bottom:7px; padding:5px;"></a>
            <a href="tickets"><img src="../assets/img/chamado-branco.png" alt="usuário" style="width:35px; margin-top:7px; margin-bottom:7px; padding:5px;"></a>

            <img src="../assets/img/sair-branco.png" alt="usuário" style="width:35px; margin-top:7px; margin-bottom:7px; padding:5px;">
        </div>

        <main class="w-100">
            @yield('content')
        </main>

    </div>

</body>

</html>