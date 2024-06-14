@extends('layouts.app')

<style>
/* Tipografía */
body {
    font-family: 'Roboto', sans-serif;
}

.bg-color {
    background-color: #975811;
    background-size: cover;
    background-attachment: fixed;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.8);
}

.bg-color h3 {
    font-weight: bold;
    color: white;
    text-shadow: 0 2px 5px rgba(0, 0, 0, 0.8);
}

.bg-color h4 {
    font-weight: bold;
    color: white;
    text-shadow: 0 2px 5px rgba(0, 0, 0, 0.8);
}

/* Contenedor principal */
.card {
    border-radius: 10px;
    box-shadow: 0 4px 18px rgba(0, 0, 0, 0.8);
}

.card-header {
    border-radius: 10px 10px 0 0;
}

.card-body {
    padding: 20px;
}

/* Mensaje de Conexión */
.custom-alert {
    border-radius: 5px;
    font-size: 1.2em;
}

/* Botones de Acción */
.btn-outline-primary, .btn-outline-success, .btn-outline-info {
    border-width: 2px;
    border-radius: 5px;
    padding: 15px;
    font-size: 1em;
    transition: all 0.3s ease;
}

.btn-outline-primary:hover, .btn-outline-success:hover, .btn-outline-info:hover {
    background-color: #f1f1f1;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
    transform: translateY(-2px);
}

/* Alinear contenido central */
.text-center {
    text-align: center;
}
</style>

@section('content')
<div class="container-fluid">
    <!-- Contenido Principal -->
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm mb-4">
                <div class="card-header bg text-white text-center" style="background:#975811;">
                    <h3 class="mb-0 shadow-md ">{{ __('Panel de Control') }}</h3>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success custom-alert" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="alert alert-info custom-alert text-center" role="alert">
                        {{ __('¡Estás conectado!') }}
                    </div>

                    <!-- Estadísticas de Reservaciones -->
                    <div class="row text-center">
                        <div class="col-md-4">
                            <div class="card bg mb-4" style="background:#975811;">
                                <div class="card-body">
                                    <h4 class="card-title">Total de Reservaciones</h4>
                                    <p class="card-text">{{ $totalReservations }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg bg-warning mb-4">
                                <div class="card-body">
                                    <h4 class="card-title">Reservaciones Activas</h4>
                                    <p class="card-text">{{ $activeReservations }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg  mb-4" style="background:#00969d;">
                                <div class="card-body">
                                    <h4 class="card-title">Reservaciones Inactivas</h4>
                                    <p class="card-text">{{ $inactiveReservations }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Reservaciones Recientes -->
                    <div class="card mb-4">
                        <div class="card-header bg text-light" style="background:#293f01;">
                            <h4 class="mb-0">Reservaciones Recientes</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Habitación</th>
                                        <th>Fecha de Llegada</th>
                                        <th>Fecha de Salida</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($recentReservations as $reservation)
                                        <tr>
                                            <td>{{ $reservation->first_name }} {{ $reservation->last_name }}</td>
                                            <td>{{ $reservation->room->name }}</td>
                                            <td>{{ $reservation->arrival_date }}</td>
                                            <td>{{ $reservation->departure_date }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Acciones Rápidas
            <div class="card shadow-sm mb-4">
                <div class="card-header bg bg-primary text-white text-center">
                    <h4 class="mb-0">{{ __('Acciones Rápidas') }}</h4>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-3 mb-3">
                            <a href="{{ route('plants.index') }}" class="btn btn-outline-primary btn-lg w-100">
                                <i class="fas fas fa-house fa-2x mb-2"></i>
                                <br>
                                {{ __('Gestionar Cabañas') }}
                            </a>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <a href="{{ route('plants.create') }}" class="btn btn-outline-success btn-lg w-100">
                                <i class="fas fas fa-house-medical fa-2x mb-2"></i>
                                <br>
                                {{ __('Agregar Nueva Cabaña') }}
                            </a>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <a href="{{ route('reservations.index') }}" class="btn btn-outline-primary btn-lg w-100">
                                <i class="fas fas fa-book fa-2x mb-2"></i>
                                <br>
                                {{ __('Ver Reservaciones') }}
                            </a>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <a href="{{ route('reservations.create') }}" class="btn btn-outline-success btn-lg w-100">
                                <i class="fas fas fa-plus fa-2x mb-2"></i>
                                <br>
                                {{ __('Crear Reservación') }}
                            </a>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <a href="{{ route('config.index') }}" class="btn btn-outline-info btn-lg w-100">
                                <i class="fas fa-cogs fa-2x mb-2"></i>
                                <br>
                                {{ __('Configuración') }}
                            </a>
                        </div>
                    </div> -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
