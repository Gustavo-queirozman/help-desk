<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./assets/css/app.css">
    <title>Chamado</title>
</head>

<body class="p-0px m-0px">
    <div class="flex">
        <!--MENU DESKTOP-->
        <div class="flex column justify-center"
            style="background-color: green; color:white;">
            <img src="../img/home-branco.png" alt="inicio"
                style="width:35px; margin-top:7px; margin-bottom:7px; padding:5px;">
            <img src="../img/perfil-branco.png" alt="usuário"
                style="width:35px; margin-top:7px; margin-bottom:7px; padding:5px;">
            <img src="../img/chamado-branco.png" alt="usuário"
                style="width:35px; margin-top:7px; margin-bottom:7px; padding:5px;">
            <img src="../img/sair-branco.png" alt="usuário"
                style="width:35px; margin-top:7px; margin-bottom:7px; padding:5px;">
        </div>

        <div style="width: 100%;">
            <!--PESQUISA DE CHAMADO-->
            <header class="flex wrap align-center justify-center"
                style="width: 100%; box-sizing:border-box; padding:20px 20px; background-color: white; box-shadow: 0 1px 25px rgba(0,0,0,.16);">
                <br>
                <input type="text" placeholder="Número chamado">
                <select name="chamado">
                    <option value>Número do chamado</option>
                    <option value="hardware">Hardware</option>
                    <option value="software">Software</option>
                </select>
                <input type="date">
                <input type="date">
                <input type="submit" value="Pesquisar">
            </header>

            
            <div class="flex wrap align-center justify-center" style="width: 100%; height:100vh; padding:10px; box-sizing:border-box;">
                <div class="flex column align-center" style="width:100%" id="container">
                    <div class="flex align-center" style="background-color:  white; border-radius:20px;padding:10px">
                        <div>
                            <h3 class="margin-top-0px" style="margin-top:0px">@Gustavo Queiroz -
                                Nome do
                                chamado</h3>
                                <div class="flex">
                                    <div class="flex">
                                        <img src="../img/tipo-chamado.png" alt="tipo do chamado" style="height:20px;">
                                        <span>x</span>
                                    </div>
                                    <div class="flex">
                                        <img src="../img/local.png" alt="setor" style="height:20px;">
                                        <span>x</span>
                                    </div>
                                    <div class="flex">
                                        <img src="../img/status.png" alt="status" style="height:20px;">
                                        <span>x</span>
                                    </div>
                                    <div class="flex">
                                        <img src="../img/tempo.png" alt="tempo" style="height:20px;">
                                        <span>x</span>
                                    </div>
                                </div>
                        </div>
                        <div class="flex align-center">
                            <button style="border:0px; padding:10px; border-radius:7px; font-size:15px;">Informações</button>
                        </div>
                    </div>
                    <br>
                    <div class="flex align-center" style="background-color:  white; border-radius:20px;padding:10px">
                        <div>
                            <h3 class="margin-top-0px" style="margin-top:0px">@Gustavo Queiroz - Nome do chamado</h3>
                                <div class="flex">
                                    <div class="flex">
                                        <img src="../img/tipo-chamado.png" alt="tipo do chamado" style="height:20px;">
                                        <span>x</span>
                                    </div>
                                    <div class="flex">
                                        <img src="../img/local.png" alt="setor" style="height:20px;">
                                        <span>x</span>
                                    </div>
                                    <div class="flex">
                                        <img src="../img/status.png" alt="status" style="height:20px;">
                                        <span>x</span>
                                    </div>
                                    <div class="flex">
                                        <img src="../img/tempo.png" alt="tempo" style="height:20px;">
                                        <span>x</span>
                                    </div>
                                </div>
                        </div>
                        <div class="flex align-center">
                            <button style="border:0px; padding:10px; border-radius:7px; font-size:15px;">Informações</button>
                        </div>
                    </div>
                    <br>
                    <div class="flex align-center" style="background-color:  white; border-radius:20px;padding:10px">
                        <div>
                            <h3 class="margin-top-0px" style="margin-top:0px">@Gustavo Queiroz -
                                Nome do
                                chamado</h3>
                                <div class="flex">
                                    <div class="flex">
                                        <img src="../img/tipo-chamado.png" alt="tipo do chamado" style="height:20px;">
                                        <span>x</span>
                                    </div>
                                    <div class="flex">
                                        <img src="../img/local.png" alt="setor" style="height:20px;">
                                        <span>x</span>
                                    </div>
                                    <div class="flex">
                                        <img src="../img/status.png" alt="status" style="height:20px;">
                                        <span>x</span>
                                    </div>
                                    <div class="flex">
                                        <img src="../img/tempo.png" alt="tempo" style="height:20px;">
                                        <span>x</span>
                                    </div>
                                </div>
                        </div>
                        <div class="flex align-center">
                            <button style="border:0px; padding:10px; border-radius:7px; font-size:15px;">Informações</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>