@extends('layouts.welcome_layout')


<style>
    body {
        font-family: 'Arial', sans-serif;
    }
    .gallery-header {
        background: url(images/galeria-inicio.png) no-repeat center center;
        background-size: cover;
        height: 300px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        padding-top: 90px;
    }
    .gallery-header h1 {
        font-size: 48px;
        margin: 0;
    }
    .gallery-section {
        padding: 40px 0;
    }
    .gallery-item {
        margin-bottom: 30px;
    }
    .gallery-item img {
        width: 100%;
        height: auto;
        object-fit: cover;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .footer {
        background-color: #975811;
        color: white;
        padding: 20px 0;
        text-align: center;
    }
    .footer a {
        color: white;
        margin: 0 10px;
        text-decoration: none;
        transition: color 0.3s ease;
    }
    .footer a:hover {
        color: #f0a500;
    }
</style>

<header class="gallery-header">
    <h1>Galería</h1>
</header>

<section class="gallery-section container">
    <div class="row">
        <div class="col-md-6 gallery-item">
            <img src="images/gale1.png" alt="Image 1">
        </div>
        <div class="col-md-6 gallery-item">
            <img src="images/gale2.png" alt="Image 2">
        </div>
        <div class="col-md-6 gallery-item">
            <img src="images/gale3.png" alt="Image 3">
        </div>
        <div class="col-md-6 gallery-item">
            <img src="images/gale4.png" alt="Image 4">
        </div>
    </div>
</section>

<!-- Pie de página -->
<footer class="footer text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="{{url('/')}}">Inicio</a></li>
                    <li class="list-inline-item"><a href="{{url('/biblioteca')}}">Cabañas</a></li>
                    <li class="list-inline-item"><a href="{{url('/nosotros')}}">Galería</a></li>
                    <li class="list-inline-item"><a href="{{url('/contactanos')}}">Contactos</a></li>
                </ul>
                <p>&copy; 2024 La Bota Del Gigante. Todos los derechos reservados.</p>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>




<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

