@extends('layouts.welcome_layout')

@section('content')

<style>
    body {
        font-family: 'Arial', sans-serif;
    }
    /* Logo */
    .logo {
        max-width: 200px;
        background-image: url('images/logotipo sinfondo.png');
        margin-bottom: 20px;
        transition: 0.5s ease;
    }
    .container {
        margin-top: 50px;
        padding: 60px;
        background-color: #fff7e6;
        border-radius: 15px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }
    .container h1 {
        text-align: center;
        font-size: 36px;
        color: #975811;
        margin-bottom: 40px;
        padding-bottom: 10px;
        border-bottom: 2px solid #975811;
        display: inline-block;
    }
    .form-group label {
        font-weight: bold;
        color: #975811;
    }
    .form-control {
        border-radius: 5px;
        border: 2px solid #ddd;
    }
    .form-control:focus {
        border-color: #975811;
        box-shadow: none;
    }
    .btn-primary {
        background-color: #975811;
        border-color: #975811;
        border-radius: 5px;
        width: 100%;
        padding: 10px;
        font-size: 18px;
    }
    .btn-primary:hover {
        background-color: #80480b;
        border-color: #80480b;
    }
</style>

<div class="container">
    <h1>Formulario de Reservas</h1>
    <form id="reservationForm" action="{{ route('reservations.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="first_name">Nombre Completo</label>
            <input type="text" id="first_name" name="first_name" class="form-control" placeholder="First Name" required>
        </div>
        <div class="form-group">
            <label for="last_name">Apellido</label>
            <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Last Name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="ejemplo@ejemplo.com" required>
        </div>
        <div class="form-group">
            <label for="room_id">Cabaña</label>
            <select id="room_id" name="room_id" class="form-control" required>
                <option value="" disabled selected>Seleccione</option>
                @foreach ($rooms as $room)
                    <option value="{{ $room->id }}">{{ $room->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="num_guests">Número de Personas</label>
            <select id="num_guests" name="num_guests" class="form-control" required>
                <option value="" disabled selected>Seleccione</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="form-group">
            <label for="arrival_date">Fecha y Hora de Llegada</label>
            <div class="d-flex">
                <input type="date" id="arrival_date" name="arrival_date" class="form-control mr-2" required>
                <input type="time" id="arrival_time" name="arrival_time" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label for="departure_date">Fecha de Salida</label>
            <input type="date" id="departure_date" name="departure_date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="special_request">Solicitud Especial (opcional)</label>
            <textarea id="special_request" name="special_request" class="form-control" rows="3"></textarea>
        </div>
        <button type="button" class="btn btn-primary" onclick="confirmReservation()">Reservar</button>
    </form>
</div>

<script>
    function confirmReservation() {
        let requiredFields = ['first_name', 'last_name', 'email', 'room_id', 'num_guests', 'arrival_date', 'arrival_time', 'departure_date'];
        let allFilled = requiredFields.every(field => document.getElementById(field).value.trim() !== '');

        if (!allFilled) {
            alert('Por favor, complete todos los campos obligatorios.');
            return;
        }

        if (confirm('¿Estás seguro de hacer la reservación?')) {
            document.getElementById('reservationForm').submit();
        }
    }
</script>
@endsection
