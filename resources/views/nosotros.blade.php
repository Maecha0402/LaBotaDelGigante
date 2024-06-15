@extends('layouts.welcome_layout')

<!-- CDN de Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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

@include('layouts.footer_layout')




<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

