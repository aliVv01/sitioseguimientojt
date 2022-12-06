<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container my-4">
        <a href="{{ route('xInicio') }}">Inicio</a>
        <a href="{{ route('xGaleria') }}">Galeria</a>
        <a href="{{ route('xLista') }}">Lista</a>
    </div>

    <div class="container my-4">
        @yield('titulo')
    </div>

    <div class="container my-4">
        @yield('seccion')
    </div>
    
    <div class="container my-4">
        Pie de pagina
    <h1>Página lista</h1>
    <h3>Lista </h3>
</body>
</html>