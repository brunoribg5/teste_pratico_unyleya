@extends('layouts.layout_calculadora')
@section('content')
<div class="row flex-center position-ref full-height">
    <div class="col">
        <table style="table-layout: inherit">
            <thead>
            <tr>
                <th>O calculo foi realizado com <span style="color:#f0a149">{{$resultado['total_convidados']}}</span> convidado(s), sendo
                    <span style="color:#f0a149">{{$resultado['adultos']}}</span> <img src="img/adulto-handle.png"> e
                    <span style="color:#f0a149">{{$resultado['criancas']}}</span> <img src="img/crianca-handle.png">
                </th>
            </tr>

            </thead>
            <tbody>
            <tr>
                <td><img src="img/icon-salgados.png" style="height: 60px;right:60px"> <strong><b> {{$resultado['salgado']}}</b> Salgado(s)</strong><br></td>

            </tr>
            <tr>
                <td><img src="img/icon-doces.png" style="height: 60px;right:60px"> <strong><b> {{$resultado['doce']}}</b> Doce(s)</strong></td>
            </tr>
            <tr>
                <td><img src="img/icon-carne.png" style="height: 60px;right:60px"> <strong><b> {{$resultado['carne']}} Kg(s) de Carne</b></strong></td>
            </tr>
            <tr>
                <td><img src="img/icon-refrigerante.png" style="height: 60px;right:60px"> <strong><b> {{$resultado['refrigerante']}}</b> Litros de Refrigerante</strong></td>
            </tr>
            @if($resultado['bebida_alcolica'] == 'TRUE')
                <tr>
                    <td><img src="img/icon-beer.png" style="height: 60px;right:60px"><strong><b> {{$resultado['cerveja']}} Lata(s) de Cerveja</b></strong></td>
                </tr>
                <tr>
                    <td><img src="img/icon-whisky.png" style="height: 60px;right:60px"><strong><b> {{$resultado['whisky']}}</b> Litros de Whisky</strong></td>
                </tr>
            @endif
            </tbody>
        </table>
    </div>
    <div class="col">
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-uny " href="{{ route('calculadora') }}"><b>Novo Calculo</b></a>
            </div>
        </div>
    </div>
</div>
@endsection


