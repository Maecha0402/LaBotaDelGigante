<!-- resources/views/rooms/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear nueva Cabaña</h1>
    <form action="{{ route('rooms.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Descripción</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="price">Precio</label>
            <input type="number" name="price" class="form-control" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="additional_services">Servicios adicionales</label>
            <textarea name="additional_services" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="image1">Imagen 1</label>
            <input type="file" name="image1" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="image2">Imagen 2</label>
            <input type="file" name="image2" class="form-control">
        </div>
        <div class="form-group">
            <label for="image3">Imagen 3</label>
            <input type="file" name="image3" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
</div>
@endsection
