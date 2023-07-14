@extends('/layouts/app')
@yield('Chamados')
@section('content')
<!--PESQUISA DE CHAMADO-->
<header class="flex wrap align-center justify-center" style="width: 100%; box-sizing:border-box; padding:20px 20px; background-color: white; box-shadow: 0 1px 25px rgba(0,0,0,.16);">
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
                        <img src="./assets/img/tipo-chamado.png" alt="tipo do chamado" style="height:20px;">
                        <span>x</span>
                    </div>
                    <div class="flex">
                        <img src="./assets/img/local.png" alt="setor" style="height:20px;">
                        <span>x</span>
                    </div>
                    <div class="flex">
                        <img src="./assets/img/status.png" alt="status" style="height:20px;">
                        <span>x</span>
                    </div>
                    <div class="flex">
                        <img src="./assets/img/tempo.png" alt="tempo" style="height:20px;">
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
                        <img src="./assets/img/tipo-chamado.png" alt="tipo do chamado" style="height:20px;">
                        <span>x</span>
                    </div>
                    <div class="flex">
                        <img src="./assets/img/local.png" alt="setor" style="height:20px;">
                        <span>x</span>
                    </div>
                    <div class="flex">
                        <img src="./assets/img/status.png" alt="status" style="height:20px;">
                        <span>x</span>
                    </div>
                    <div class="flex">
                        <img src="./assets/img/tempo.png" alt="tempo" style="height:20px;">
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
                        <img src="./assets/img/tipo-chamado.png" alt="tipo do chamado" style="height:20px;">
                        <span>x</span>
                    </div>
                    <div class="flex">
                        <img src="./assets/img/local.png" alt="setor" style="height:20px;">
                        <span>x</span>
                    </div>
                    <div class="flex">
                        <img src="./assets/img/status.png" alt="status" style="height:20px;">
                        <span>x</span>
                    </div>
                    <div class="flex">
                        <img src="./assets/img/tempo.png" alt="tempo" style="height:20px;">
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
@stop