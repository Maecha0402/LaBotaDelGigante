@extends('layouts.welcome_layout')

@section('content')
<div class="container">
    <h1>Mis Reservaciones</h1>
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
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
