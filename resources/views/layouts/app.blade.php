<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./assets/css/app.css" />
    <title>@yield('title')</title>
</head>

<body class="p-0px m-0px">
    <div class="flex">
        <div class="flex column justify-center" style="background-color: green; color:white;">
            <img src="./assets/img/home-branco.png" alt="inicio" style="width:35px; margin-top:7px; margin-bottom:7px; padding:5px;">
            <img src="./assets/img/perfil-branco.png" alt="usuário" style="width:35px; margin-top:7px; margin-bottom:7px; padding:5px;">
            <img src="./assets/img/chamado-branco.png" alt="usuário" style="width:35px; margin-top:7px; margin-bottom:7px; padding:5px;">
            <img src="./assets/img/sair-branco.png" alt="usuário" style="width:35px; margin-top:7px; margin-bottom:7px; padding:5px;">
        </div>
        <section class="content" style="width:100%">
            @yield('content')
        </section>
    </div>
</body>

</html>