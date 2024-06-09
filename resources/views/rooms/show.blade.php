<!-- resources/views/rooms/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $room->name }}</h1>
    <p>{{ $room->description }}</p>
    <p><strong>Precio:</strong> ${{ $room->price }}</p>
    <p><strong>Servicios adicionales:</strong> {{ $room->additional_services }}</p>
    <div>
        <img src="{{ asset('images/' . $room->image1) }}" width="200">
        <img src="{{ asset('images/' . $room->image2) }}" width="200">
        <img src="{{ asset('images/' . $room->image3) }}" width="200">
    </div>
    <a href="{{ route('rooms.index') }}" class="btn btn-primary">Volver a la lista</a>
</div>
@endsection
