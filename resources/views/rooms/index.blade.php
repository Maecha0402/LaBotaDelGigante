<!-- resources/views/rooms/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Cabañas</h1>
    <a href="{{ route('rooms.create') }}" class="btn btn-primary mb-3">Crear nueva cabaña</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rooms as $room)
            <tr>
                <td>{{ $room->name }}</td>
                <td>{{ $room->description }}</td>
                <td>{{ $room->price }}</td>
                <td>
                    <a href="{{ route('rooms.show', $room->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('rooms.edit', $room->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" style="display:inline;">
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
@endsection
