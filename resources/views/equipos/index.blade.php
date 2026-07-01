<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Laboratorio</title>
</head>
<body>

    <h1>Sistema de Gestión del Laboratorio</h1>
    <hr>

    <h2>Registrar Nuevo Equipo</h2>
    <form action="{{ route('equipos.store') }}" method="POST">
        @csrf
        
        <label for="nombre">Nombre / Tipo de Componente:</label><br>
        <input type="text" id="nombre" name="nombre" max="80" required><br><br>

        <label for="numero_serie">Número de Serie / Patrimonio:</label><br>
        <input type="text" id="numero_serie" name="numero_serie" required><br><br>

        <label for="descripcion">Descripción / Observaciones:</label><br>
        <textarea id="descripcion" name="descripcion" rows="4"></textarea><br><br>

        <button type="submit">Guardar Equipo</button>
    </form>

    <hr>

    <h2>Equipos Existentes</h2>
    <ul>
        @forelse($equipos as $equipo)
            <li>
                <strong>{{ $equipo->nombre }}</strong> (S/N: {{ $equipo->numero_serie }}) 
                <br><em>Descripción:</em> {{ $equipo->descripcion ?? 'Sin observaciones.' }}
            </li>
            <br>
        @empty
            <li>No hay insumos cargados en el sistema.</li>
        @endforelse
    </ul>

</body>
</html>