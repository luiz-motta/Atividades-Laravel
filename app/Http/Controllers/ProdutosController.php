<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public $produtos = [
        [
            'nome' => 'Processador Intel I9',
            'categoria' => 'Informática',
            'preco' => 1899.90,
            'novo' => true,
            'promocao' => false
        ],
        [
            'nome' => 'Guitarra Fender Stratocaster',
            'categoria' => 'Instrumentos musicais',
            'preco' => 9899.90,
            'novo' => true,
            'promocao' => false
        ],
        [
            'nome' => 'TV Sony 59"',
            'categoria' => 'Eletrônicos',
            'preco' =>  2499.90,
            'novo' => true,
            'promocao' => true
        ],
        [
            'nome' => 'Soundbar LG XPTO',
            'categoria' => 'Eletrônicos',
            'preco' =>  899.90,
            'novo' => true,
            'promocao' => true
        ],
        [
            'nome' => 'Processador AMD Ryzen 3',
            'categoria' => 'Informática',
            'preco' => 399.90,
            'novo' => false,
            'promocao' => false
        ],
        [
            'nome' => 'iPhone 8 - 64GB',
            'categoria' => 'Celulares',
            'preco' =>  1899.90,
            'novo' => false,
            'promocao' => false
        ],
        [
            'nome' => 'Smartphone Samsung Galaxy S20',
            'categoria' => 'Celulares',
            'preco' =>  1299.90,
            'novo' => false,
            'promocao' => true
        ]
        ];

    public $produtosNovos;
    public $produtosUsados;

    public function __construct() {
        $this->produtosNovos =  array_filter($this->produtos, function($produto) {
            return ($produto['novo'] == true);
        });
        $this->produtosUsados = array_filter($this->produtos, function($produto) {
            return ($produto['novo'] == false);
        });

    }


    public function exibirProdutos () {

        return view('produtos', [
            'produtosNovos' => $this->produtosNovos,
            'produtosUsados'=> $this->produtosUsados,
            'todos' => true,
            'contador1' => 0,
            'contador2' => 0
        ]);

    }

    public function exibirProdutosNovos() {


        return view('produtos', [
            'produtosNovos' => $this->produtosNovos,
            'todos' => false,
            'contador1' => 0
        ]);

    }

    public function exibirProdutosUsados() {


        return view('produtos', [
            'produtosUsados' => $this->produtosUsados,
            'todos' => false,
            'contador2' => 0
        ]);

    }



}
