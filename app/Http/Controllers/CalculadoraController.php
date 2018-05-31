<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    protected function _validate(Request $request){
        $rules = [
            'qtd_criancas' => 'required|integer',
            'qtd_adultos' => 'required|integer'
        ];

        $messages = [
            'qtd_adultos.required' => 'Informe uma quantidade de adultos para a festa',
            'qtd_adultos.integer' => 'Quantidade de adultos dever ser numerico',
            'qtd_criancas.integer' => 'Quantidade de criancas dever ser numerico',
            'qtd_criancas.required' => 'Informe uma quantidade de criancas para a festa'
        ];

        return $this->validate($request, $rules, $messages);
    }
    public function index(){
        return view('Calculadora/index');
    }

    public function calcular(Request $request){
        //Validacao dos campos
        $this->_validate($request);

        //Retorna quantidade de alduto criancas e geral
        $criancas = (int)$request->qtd_criancas;
        $adultos = (int)$request->qtd_adultos;
        $total_convidados = $adultos + $criancas;

        //Calcula Total de Salgados
        $salgados_adultos = round(100 * ($adultos / 10));
        $salgados_criancas = round(10 * ($adultos / 2));
        $salgados = $salgados_adultos + $salgados_criancas;

        //Calcula Total de doces
        $doces = round(5 * ($criancas / 4));

        //Calcula Total de Carne
        $carnes = round($total_convidados / 6);

        //Calcula Total Refrigerante
        $refrigerantes = round(2 * ($total_convidados / 4));

        //Calcula Total de Bebida Alcoolica caso seja necessario
        if ($request->bebida_alcolica == 'TRUE') {

            //Calcula Total de Cerveja
            $cerveja_adulto = round(12 * ($adultos / 3));
            $cerveja_crianca = 2 * $criancas;
            $cervejas = $cerveja_adulto - $cerveja_crianca < 0 ? 0 : $cerveja_adulto - $cerveja_crianca;

            //Calcula Total de Whisky
            $whiskys = round($adultos / 30);
        } else {
            $cervejas = 0;
            $whiskys = 0;
        }

        //Monta array com resultado e envia para view
        $resultado = [
            'adultos' => $adultos
            , 'criancas' => $criancas
            , 'total_convidados' => $total_convidados
            , 'salgado' => $salgados
            , 'doce' => $doces
            , 'carne' => $carnes
            , 'refrigerante' => $refrigerantes
            , 'cerveja' => $cervejas
            , 'whisky' => $whiskys
            , 'bebida_alcolica' => $request->bebida_alcolica
        ];

        //dd($resultado);
        //die;
        return view('Calculadora/resultado', compact('resultado'));
    }

}
