@extends('layouts.welcome_layout')


<style>
    body {
        font-family: 'Arial', sans-serif;
    }
    .contact-section {
        padding: 60px 0;
        background-color: #f0f0f0;
        text-align: center;
    }
    .contact-section h2 {
        padding-top: 100px;
        font-size: 36px;
        margin-bottom: 40px;
        color: #333;
    }
    .map-container {
        width: 100%;
        height: 400px;
        margin-bottom: 60px;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .map-container iframe {
        width: 100%;
        height: 100%;
        border: 0;
    }
    .contact-info {
        max-width: 900px;
        margin: 0 auto;
        text-align: left;
        background: #fff;
        padding: 40px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
    }
    .contact-info h3 {
        font-size: 24px;
        color: #975811;
        margin-bottom: 20px;
        border-bottom: 2px solid #975811;
        display: inline-block;
        padding-bottom: 5px;
    }
    .contact-info p {
        font-size: 18px;
        margin-bottom: 20px;
        color: #555;
    }
    .social-icons {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
    }
    .social-icons a {
        margin: 0 15px;
        text-decoration: none;
        font-size: 24px;
        color: #333;
        transition: color 0.3s ease, transform 0.3s ease;
    }
    .social-icons a:hover {
        color: #975811;
        transform: scale(1.2);
    }
    .contact-info .contact-method {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }
    .contact-info .contact-method i {
        font-size: 24px;
        margin-right: 15px;
        color: #975811;
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

<section class="contact-section container">
    <h2>Contáctanos</h2>
    
    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31834.39133803323!2d-75.57929025773062!3d2.925320489349746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3b75fdaf3e8479%3A0x4d31f1ae29a42d1f!2sLa%20Bota%20Del%20Gigante!5e0!3m2!1sen!2sco!4v1621357407619!5m2!1sen!2sco" allowfullscreen></iframe>
    </div>
    
    <div class="contact-info">
        <h3>Ubicación</h3>
        <p>Vereda los Altares, Vía #Km Gigante, Neiva, Huila</p>
        
        <h3>Redes Sociales</h3>
        <div class="social-icons">
            <a href="#" target="_blank"><i class="fab fa-whatsapp"></i></a>
            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="#" target="_blank"><i class="fab fa-tiktok"></i></a>
        </div>
        
        <h3>Teléfono</h3>
        <div class="contact-method">
            <i class="fas fa-phone-alt"></i>
            <p>+57 315 703 3433</p>
        </div>
        
        <h3>Correo Electrónico</h3>
        <div class="contact-method">
            <i class="fas fa-envelope"></i>
            <p>labotadelgigante@gmail.com</p>
        </div>
    </div>
</section>

<footer class="footer">
    <p>&copy; 2024 La Bota Del Gigante. Todos los derechos reservados.</p>
    <a href="#">Inicio</a>
    <a href="#">Cabañas</a>
    <a href="#">Galería</a>
    <a href="#">Contáctanos</a>
</footer>



<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
