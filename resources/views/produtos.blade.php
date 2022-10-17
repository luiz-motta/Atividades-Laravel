@extends('layout.table')

@section('title', 'Tabela de produtos')

@section('h1_1', 'Produtos Novos')
@section('h1_2', 'Produtos Usados')

@section('th1', '#')
@section('th2', 'Produto')
@section('th3', 'Categoria')
@section('th4', 'Preço')



@section('produtos_novos')

@if(isset($produtosNovos) && $produtosNovos == true)

@foreach($produtosNovos as $produtoNovo)
    @if($produtoNovo['promocao'] == true)
    <tr class="table-success">
    @else
    <tr>
    @endif

        <th scope="row"> {{ ++$contador1 }} </th>
        <td class="w-50"> {{ $produtoNovo['nome'] }} </td>
        <td> {{ $produtoNovo['categoria'] }} </td>
        <td> {{ 'R$ ' .number_format($produtoNovo['preco'], 2, ',', '.') }} </td>
    </tr>

@endforeach

@endif

@endsection


@section('produtos_usados')

@if(isset($produtosUsados) && $produtosUsados == true)

@foreach($produtosUsados as $produtoUsado)

    @if($produtoUsado['promocao'] == true)
    <tr class="table-success">
    @else
    <tr>
    @endif

        <th scope="row"> {{ ++$contador2 }}</th>
        <td> {{ $produtoUsado['nome'] }} </td>
        <td> {{ $produtoUsado['categoria'] }} </td>
        <td> {{ 'R$ ' .number_format($produtoUsado['preco'], 2, ',', '.') }} </td>
    </tr>

@endforeach

@endif

@endsection

