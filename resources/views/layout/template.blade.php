<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>

    @if(isset($imc) && $imc == true)
        @yield('imc')
    @endif

    @if(isset($produtosNovos)  && $produtosNovos == true)
        @yield('table')
    @elseif(isset($produtosUsados) && $produtosUsados == true)
        @yield('table')
    @endif



</body>
</html>
