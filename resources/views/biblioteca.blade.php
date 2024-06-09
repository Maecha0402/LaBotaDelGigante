@extends('layouts.welcome_layout')

<header class="cabanas-header">
    <h1>Cabañas</h1>
</header>


<style>
    body {
        font-family: 'Arial', sans-serif;
    }
    .cabanas-header {
        background: url(images/cabañas-inicio.png) no-repeat center center;
        background-size: cover;
        height: 300px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        margin-top: 90px;
    }
    .cabanas-header h1 {
        font-size: 48px;
        margin: 0;
    }
    .cabanas-section {
        padding: 40px 0;
    }
    .cabana-item {
        display: flex;
        align-items: center;
        margin-bottom: 30px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .cabana-item img {
        width: 300px;
        height: auto;
        object-fit: cover;
    }
    .cabana-content {
        padding: 20px;
        flex: 1;
    }
    .cabana-content h5 {
        font-size: 24px;
        margin-bottom: 15px;
        color: #2e323d;
    }
    .cabana-content p {
        font-size: 16px;
        margin-bottom: 20px;
        color: #2e323d;
    }
    .cabana-content a {
        background-color: #975811;
        color: white;
        text-transform: uppercase;
        padding: 10px 20px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }
    .cabana-content a:hover {
        background-color: #824a0b;
        color: white;
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


<section class="cabanas-section container">
    <div class="row">
        <div class="col-md-12">
            <div class="cabana-item">
                <img src="images/cabañas1.jpg" alt="Suite Santo Domingo">
                <div class="cabana-content">
                    <h5>Suite Santo Domingo</h5>
                    <p>Disfruta de una estadía placentera en nuestra Suite Santo Domingo, vista la montaña con mucha magia y amor para ti.</p>
                    <a href="#" class="btn btn-primary">Ver Más</a>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="cabana-item">
                <img src="images/cabañas2.jpg" alt="Cabaña Mexico Lindo">
                <div class="cabana-content">
                    <h5>Cabaña Mexico Lindo</h5>
                    <p>No solo las fiestas son temáticas, disfruta de una cabaña adaptada con lo típico de este país tan hermoso México.</p>
                    <a href="#" class="btn btn-primary">Ver Más</a>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="cabana-item">
                <img src="images/cabañas.jpg" alt="Suite Deluxe New York">
                <div class="cabana-content">
                    <h5>Suite Deluxe New York</h5>
                    <p>Alojamientos con todo el estilo y tematizados para un descanso único.</p>
                    <a href="#" class="btn btn-primary">Ver Más</a>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="cabana-item">
                <img src="images/cabañas3.png" alt="Camping Bota Texa">
                <div class="cabana-content">
                    <h5>Camping Bota Texa</h5>
                    <p>Vive una experiencia única y diferente durmiendo dentro de una bota gigante.</p>
                    <a href="#" class="btn btn-primary">Ver Más</a>
                </div>
            </div>
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
