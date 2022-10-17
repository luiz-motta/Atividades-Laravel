@extends('layout.template')

@section('title', 'Calcular IMC')

@section('imc')

<div class="container">
    <div class="row text-center">
        <div class="col-md-7 mx-auto">

            @if($imc >= 18.5 && $imc < 25)
            <div class="alert alert-success" role="alert">
                {{ $resultado }}
            </div>

            @else
            <div class="alert alert-danger" role="alert">
                {{ $resultado }}
            </div>

            @endif

        </div>
    </div>
</div>


@endsection



