<!DOCTYPE html>
<html>
<head>
    <title>Inventario de Utensilios</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('layouts.navbar')
    <div class="container">
        <h1>Inventario de Utensilios</h1>
        <a href="{{ route('utensilios.create') }}" class="btn btn-primary">Agregar Utensilio</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Completo</th>
                    <th>Funciona</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($utensilios as $utensilio)
                <tr>
                    <td>{{ $utensilio->nombre }}</td>
                    <td>{{ $utensilio->tipo }}</td>
                    <td>{{ $utensilio->completo ? 'Sí' : 'No' }}</td>
                    <td>{{ $utensilio->funciona ? 'Sí' : 'No' }}</td>
                    <td>
                        <a href="{{ route('utensilios.edit', $utensilio->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('utensilios.destroy', $utensilio->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
