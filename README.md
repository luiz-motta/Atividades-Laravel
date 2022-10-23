<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


## Atividade 1 

Criar nesse projeto uma rota seguindo o padrão:

/imc/{nome}/{peso}/{altura}/{genero}

O programa deve calcular o IMC, a partir dos dados da URL e imprimir algo como:

Olá Sra. Mariana, seu IMC é 104,2. Você tem Obesidade grau III
Olá Sr. Jonas, seu IMC é 18,2. Você está abaixo do peso ideal
Olá Sr. Gustavo, seu IMC é 23. Você tem o peso ideal
etc...

Se algumas das condições abaixo ocorrer, a frase seguinte deve ser impressa: "Informe apenas valores válidos"

- Seguimento de URL peso recebeu um valor não numérico
- Seguimento de URL altura recebeu um valor não numérico
- Seguimento de URL recebeu um valor diferente de masculino ou feminino (independentemente de estar em caixa alta ou baixa).


## Atividade 2

Peguem a rota que vocês criaram na atividade anterior, referente ao IMC, e mova a função anônima ali presente para um controlador chamado: PacienteController. Essa função anonima ficará em um método desse controller chamado calcularIMC().

A lógica aplicada será a mesma, porém a resposta HTTp deverá ser impressa em HTML (view).

Use o Bootstrap para exibir um alerta verde (success) se o IMC foi ideal ou vermelho (danger) se o IMC estiver acima ou abaixo do ideal


## Atividade 3

Desenvolva uma aplicação no Laravel de tal forma que ao acessar a rota raiz "/", sejam listados todos os produtos novos e usados

Ao acessar a rota "/novos", devem ser exibidos apenas os produtos novos

Ao acessar a rota "/usados" devem ser exibidos apenas os arquivos usados

Deve ser criada uma propriedade privada no seu controlador "ProdutosController" onde ficarão armazenados os produtos

O array com os produtos, devem ser obtidos aqui
https://pastebin.com/v72BjPe8

Produtos com descontos devem ter a classe "table-success" do Bootstrap, conforme mostra a imagem

Dica: 

- Utilize a função array_filter para filtrar quais produtos devem ser exibidos em cada situação 
- Utilize a função number_format para formatar o preço no formato do Real Brasileiro


## Atividade 4

Crie um controlador chamado VendasController.
Ele deve ter os métodos: listarVendas, verVenda, cadastrarVenda, atualizarVenda e excluirVenda. 
Esses métodos devem estar associados às respectivas rotas a seguir: 
/vendas
/vendas/ver/{id}
/vendas/nova/{produto}/{preco}/{quantidade}
/vendas/atualizar/{id}/{produto}/{preco}/{quantidade},
/vendas/excluir/{id}

- Deve ser criado um banco de dados chamado "financeiro" e uma tabela chamada "vendas"
- Deve ser criado um Model chamado Venda com a opção public $timestamps = false;
- A tabela de vendas deve ter as seguintes colunas: id, produto, preco_unitario, quantidade

1. O método listarVendas deve imprimir no próprio controlador algo como:

## Produtos ##

- Produto: IPhone 13 Pro Max
- Quant.: 2
- Preço Unitário: R$ 7.000,00 
- Total: R$ 14.000,00

=============================================

- Produto: SmartTV LG 40"
- Quant.: 1
- Preço Unitário: R$ 3.500,00 
- Total: R$ 3.500,00

2. O método verVenda deve imprimir no próprio controlador algo como:

## SmartTV LG 40 ##

- Quant.: 1
- Preço Unitário: R$ 3.500,00 
- Total: R$ 3.500,00

3. O método cadastrarVenda e atualizarVenda devem cadastrar/atualizar (respectivamente) com base nos dados informados na URL
Obs.: Após a inclusão / atualização, deve haver uma mensagem textual informando que tudo ocorreu bem.

4. O método excluirVenda deve excluir o registro com base no ID informado na URL.
Obs.: Após a exclusão, deve haver uma mensagem textual informando que tudo ocorreu bem.
