@extends('/layouts/app')
@yield('Inicio')
@section('content')
<div class="flex align-center justify-center">
    <div class="column" style="width:100px; height:100px; border:1px solib black;">
        <a href="/tickets">
            <div>
                <span>Chamados</span>
            </div>
        </a>
    </div>
    <div class="column" style="border:1px solib black;" style="width:100px; height:100px; border:1px solib black;">
        <a href="/information">
            <div>
                <span>Informações</span>
            </div>
        </a>
    </div>
</div>
@stop
