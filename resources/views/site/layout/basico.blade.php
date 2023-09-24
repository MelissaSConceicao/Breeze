<!DOCTYPE html>
<html lang="en">

<head>
    {{-- 
        @yield : é uma espécie de 'slot' ou 'parâmetro', exibe conteúdo de uma @section
    --}}
    <title>Super Gestão - @yield('titulo')</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/estilo_basico.css') }}">
</head>

<body>
    {{-- @include : importa o conteúdo de um arquivo, no caso, o cabeçalho --}}
    @include('site.layout._partials.topo')
    @yield('conteudo')
</body>

</html>