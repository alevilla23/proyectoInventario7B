<!DOCTYPE html>
<html>
<head>
    <title>Detalles del Utensilio</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('layouts.navbar')
    <div class="container">
        <h1>Detalles del Utensilio</h1>
        <ul>
            <li>Nombre: {{ $utensilio->nombre }}</li>
            <li>Tipo: {{ $utensilio->tipo }}</li>
            <li>¿Está Completo?: {{ $utensilio->completo ? 'Sí' : 'No' }}</li>
            <li>¿Funciona?: {{ $utensilio->funciona ? 'Sí' : 'No' }}</li>
        </ul>
        <a href="{{ route('utensilios.index') }}" class="btn btn-primary">Volver al Inventario</a>
        <a href="{{ route('utensilios.edit', $utensilio->id) }}" class="btn btn-warning">Editar</a>
        <form action="{{ route('utensilios.destroy', $utensilio->id) }}" method="POST" style="display:inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
    </div>
</body>
</html>
