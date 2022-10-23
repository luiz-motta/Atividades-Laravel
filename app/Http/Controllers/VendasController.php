<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendas;

class VendasController extends Controller
{


    public function listarVendas () {

        $venda = Vendas::all();

        echo('## Produtos ## ' . '</br></br>');

        foreach($venda as $dado) {

            printf(   '- Produto: ' . $dado->produto . '</br>' .
                    '- Quant.: ' . $dado->quantidade . '</br>' .
                    '- Preço Unitário: R$ ' . number_format($dado->preco_unitario, 2, ',', '.') . '</br>' .
                    '- Total: R$ ' . number_format($dado->preco_unitario * $dado->quantidade, 2, ',', '.') . '</br></br>' .
                    '======================' . '</br></br>'
                );
        }

        return;

    }

    public function verVenda ($id) {

        $venda = Vendas::all();

        foreach($venda as $dado) {
            if($id == $dado->id) {
                printf(   '## ' . $dado->produto . ' ##' . '</br></br>' .
                        '- Quant.: ' . $dado->quantidade . '</br>' .
                        '- Preço Unitário: R$ ' . number_format($dado->preco_unitario, 2, ',', '.') . '</br>' .
                        '- Total: R$ ' . number_format($dado->preco_unitario * $dado->quantidade, 2, ',', '.') . '</br></br>' .
                        '======================' . '</br></br>'
                    );
            }
        }


    }



    public function cadastrarVenda ($produto, $preco_unitario, $quantidade) {

        $venda = new Vendas();
        $venda->produto = $produto;
        $venda->preco_unitario = $preco_unitario;
        $venda->quantidade = $quantidade;
        $venda->save();


        return 'Cadastro realizado com sucesso!';

    }

    public function atualizarVenda ($id, $produto, $preco_unitario, $quantidade) {

        $venda = Vendas::find($id);


        $venda->produto = $produto;
        $venda->preco_unitario = $preco_unitario;
        $venda->quantidade = $quantidade;
        $venda->save();

        return 'Registro atualizado!';



    }

    public function excluirVenda ($id) {

        $venda = Vendas::find($id);

        if(isset($venda) && $venda == true) {
            $venda->delete();
            return 'Registro apagado!';
        } else {
            return 'Registro não existente!';
        }

    }


}
