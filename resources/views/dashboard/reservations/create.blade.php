@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Crear Reservación</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('dashboard.reservations.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="first_name">Nombre Completo</label>
            <input type="text" id="first_name" name="first_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="last_name">Apellido</label>
            <input type="text" id="last_name" name="last_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="room_id">Cabaña</label>
            <select id="room_id" name="room_id" class="form-control" required>
                <option value="" disabled selected>Seleccione</option>
                @foreach ($rooms as $room)
                    <option value="{{ $room->id }}" {{ $room->status == 'inactive' ? 'disabled' : '' }}>
                        {{ $room->name }} {{ $room->status == 'inactive' ? '(Inactiva)' : '' }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="num_guests">Número de Personas</label>
            <input type="number" id="num_guests" name="num_guests" class="form-control" min="1" max="5" required>
        </div>
        <div class="form-group">
            <label for="arrival_date">Fecha de Llegada</label>
            <input type="date" id="arrival_date" name="arrival_date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="arrival_time">Hora de Llegada</label>
            <input type="time" id="arrival_time" name="arrival_time" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="departure_date">Fecha de Salida</label>
            <input type="date" id="departure_date" name="departure_date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="special_request">Solicitud Especial (opcional)</label>
            <textarea id="special_request" name="special_request" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Reservar</button>
    </form>
</div>
@endsection
