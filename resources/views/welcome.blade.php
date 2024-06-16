@extends('layouts.welcome_layout')

<!-- CDN de Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<!-- Estilos adicionales -->
<style>
    /* Ajuste de márgenes para que la imagen principal no quede tapada por la barra de navegación */
    .hero-image {
        background-image: url(images/banner.png); /* Cambia el path a la imagen que quieres usar */
        background-size: cover;
        background-position: center;
        height: 600px;
        position: relative;
        margin-top: 126px; /* Ajuste para dejar espacio para la navbar */
    }
    .hero-text {
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
    }
    .section-title {
        font-size: 40px;
        font-weight: bolder;
        padding-top: 30px;
        margin-bottom: 50px;
        color: white;
        text-shadow: 0 5px 8px rgb(0, 0, 0, 0.4);
    }
    .section-prf {
        font-size: 20px;
        font-weight: bolder;
        padding-bottom: 50px;
    }
    .color-somos {
        background-color: #975811;
    }
    .footer {
        background-color: #975811;
        color: white;
        padding: 20px 0;
    }
    .footer a {
        color: white;
    }
</style>


<!-- Imagen Principal -->
<div class="hero-image">
    <div class="hero-text">
        
    </div>
</div>

<!-- Quiénes Somos -->
<div class="text-center color-somos">
    <h1 class="section-title">¿Quiénes Somos?</h1>
    <p class="container section-prf">¡Sumérgete en la belleza natural, disfruta de la tranquilidad y haz recuerdos inolvidables en "La Bota Del Gigante"! Estamos emocionados de ser parte de tu próxima aventura.</p>
</div>

<!-- Imágenes -->
<div class="container text-center">
    <div class="row">
        <div class="col-md-4">
            <img src="images/img1.png" class="img-fluid" alt="Imagen 1">
        </div>
        <div class="col-md-4">
            <img src="images/img2.png" class="img-fluid" alt="Imagen 2">
        </div>
        <div class="col-md-4">
            <img src="images/img3.png" class="img-fluid" alt="Imagen 3">
        </div>
    </div>
</div>


@include('layouts.footer_layout')