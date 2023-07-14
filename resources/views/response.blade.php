@extends('/layouts/app')
@yield('Resposta')
@section('content')
<h1 style="margin:10px;">Título do chamado</h1>
<div class="flex column">
    <div class="flex column" style="margin:10px; width:300px">
        <textarea name="response" cols="30" rows="10"></textarea>
        <select name="status">
            <option value="">Aberto</option>
            <option value="">Fechado</option>
            <option value="">Em espera</option>
        </select>
        <input type="submit" value="Enviar">
    </div>

    <div class="column m-10px" style="margin:10px">
        <div class="flex">
            <img src="" alt="user">
            <b>- Usuário</b>
        </div>
        <div>
            <p>dnsadn asda piiasoid ioaoid ioasoid</p>
        </div>
        <hr>
    </div>
</div>

@stop