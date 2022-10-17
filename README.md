<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


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
