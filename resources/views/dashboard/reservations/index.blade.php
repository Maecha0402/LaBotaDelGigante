@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Reservaciones Creadas</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Habitación</th>
                <th>Fecha de Llegada</th>
                <th>Fecha de Salida</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservations as $reservation)
                <tr>
                    <td>{{ $reservation->first_name }} {{ $reservation->last_name }}</td>
                    <td>{{ $reservation->room->name }}</td>
                    <td>{{ $reservation->arrival_date }}</td>
                    <td>{{ $reservation->departure_date }}</td>
                    <td>{{ $reservation->status }}</td>
                    <td>
                        <a href="{{ route('dashboard.reservations.edit', $reservation->id) }}" class="btn btn-primary btn-sm">Editar</a>
                        <form action="{{ route('dashboard.reservations.destroy', $reservation->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
