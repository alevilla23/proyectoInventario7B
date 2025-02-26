<!DOCTYPE html>
<html>
<head>
    <title>Agregar Utensilio</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('layouts.navbar')
    <div class="container">
        <h1>Agregar Utensilio</h1>
        <form action="{{ route('utensilios.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control">
            </div>
            <div class="form-group">
                <label for="tipo">Tipo:</label>
                <input type="text" name="tipo" id="tipo" class="form-control">
            </div>
            <div class="form-group">
                <label for="completo">¿Está Completo?:</label>
                <input type="checkbox" name="completo" id="completo" value="1">
            </div>
            <div class="form-group">
                <label for="funciona">¿Funciona?:</label>
                <input type="checkbox" name="funciona" id="funciona" value="1">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</body>
</html>
