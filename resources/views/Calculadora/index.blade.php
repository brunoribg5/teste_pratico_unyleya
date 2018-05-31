@extends('layouts.layout_calculadora')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="flex-center position-ref full-height">

    <form method="POST" action="{{route('calculadora.calcular')}}" id="form-festa">
        @csrf
        <div class="row flex-container">
            <div class="col-md-4 col-xs-12 ord one">
                <div class="form-group">
                    <input type="number" class="form-control" name="qtd_adultos" id="qtd_adultos" placeholder="Total de Adultos" value="{{old('qtd_adultos')}}">
                </div>
            </div>
            <div class="col-md-4 col-xs-12 ord two">
                <div class="form-group">
                    <input type="text" class="form-control festa" name="qtd_criancas" id="qtd_criancas" placeholder="Total de Crianças" value="{{old('qtd_criancas')}}">
                </div>
            </div>
            <div class="col-md-4 col-xs-12 ord three">
                <label for="bebida"><b><strong>Bebida alcoólica?</strong></b></label>
                <br>
                <b><strong>
                        <label class="radio-inline"><input type="radio" name="bebida_alcolica" value="TRUE" {{old('bebida_alcolica') == "TRUE" ? 'checked' : 'checked'}}>  Sim</label>
                        &nbsp&nbsp&nbsp&nbsp
                        <label class="radio-inline"><input type="radio" name="bebida_alcolica" value="FALSE" {{old('bebida_alcolica') == "FALSE" ? 'checked' : ''}}>  Não</label>
                    </strong></b>
            </div>
        </div>
        <br>
            <button type="submit"  class="btn btn-uny"><b>Calcular</b></button>
    </form>
</div>
@endsection





