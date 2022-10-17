<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function calcularIMC($nome, $massa, $altura, $genero)
    {

    $abreviacao = match(true) {
        mb_strtolower($genero) == "masculino" => 'Sr.',
        mb_strtolower($genero) == "feminino" => 'Sra.',
        default => 'Segmento de URL "gênero" recebeu um valor diferente de masculino ou feminino'
    };


    $imc = match(true) {
        is_numeric($massa) && is_numeric($altura) => $massa / ($altura*$altura),
        !is_numeric($massa) && is_numeric($altura) => 'Segmento de URL "massa" recebeu um valor não numérico',
        is_numeric($massa) && !is_numeric($altura) => 'Segmento de URL "altura" recebeu um valor não numérico',
        default => 'Segmento de URL "massa" e "altura" recebeu um valor não numérico'
    };


    $faixaIMC = match(true) {
        $imc < 18.5 => 'Abaixo do peso',
        $imc <= 25 => 'no Peso Ideal',
        $imc <= 30 => 'Levemente acima do peso',
        $imc <= 35 => 'com Obesidade Grau I',
        $imc <= 40 => 'com Obesidade Grau II',
        $imc > 40 => 'com Obesidade Grau III',
        default => ''
    };

    $resultado = match(true) {
        is_numeric($imc) && strlen($abreviacao) < 5 => "Olá " . $abreviacao . " " . ucfirst($nome) . " , seu IMC é " . number_format($imc, 2) . " .Você está " . $faixaIMC . ".",
        !is_numeric($imc) =>  $imc,
        strlen($abreviacao) >= 5 =>  $abreviacao,
    };

    return view('imc', [
            'resultado' => $resultado,
            'imc' => $imc
    ]);

    }

}
