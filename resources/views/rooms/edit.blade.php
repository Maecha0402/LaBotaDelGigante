<!-- resources/views/rooms/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar habitación</h1>
    <form action="{{ route('rooms.update', $room->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" class="form-control" value="{{ $room->name }}" required>
        </div>
        <div class="form-group">
            <label for="description">Descripción</label>
            <textarea name="description" class="form-control" required>{{ $room->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="price">Precio</label>
            <input type="number" name="price" class="form-control" step="0.01" value="{{ $room->price }}" required>
        </div>
        <div class="form-group">
            <label for="additional_services">Servicios adicionales</label>
            <textarea name="additional_services" class="form-control">{{ $room->additional_services }}</textarea>
        </div>
        <div class="form-group">
            <label for="image1">Imagen 1</label>
            <input type="file" name="image1" class="form-control">
            <img src="{{ asset('images/' . $room->image1) }}" width="100">
        </div>
        <div class="form-group">
            <label for="image2">Imagen 2</label>
            <input type="file" name="image2" class="form-control">
            <img src="{{ asset('images/' . $room->image2) }}" width="100">
        </div>
        <div class="form-group">
            <label for="image3">Imagen 3</label>
            <input type="file" name="image3" class="form-control">
            <img src="{{ asset('images/' . $room->image3) }}" width="100">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
