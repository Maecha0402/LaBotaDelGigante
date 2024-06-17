<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>La Bota Del Gigante</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" >
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" href="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <!-- CDN de Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Custom CSS -->
    <style>
        /* Importación de fuentes */
        @import url('https://fonts.googleapis.com/css2?family=Righteous&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');

        /* Estilos generales */
        * {
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Colores predeterminados */
        :root {
            --bg-color: white;
            --font-color: #fff;
            --secondary-bg-color: #9b5f1b;
        }

        /* Comportamiento del scroll */
        html {
            scroll-behavior: smooth;
        }

        /* Barra de navegación */
        #menuBarra {
            background-color: white;
            box-shadow: 0px 0px 10px 5px rgba(0, 0, 0, 0.5); 
            position: fixed; 
            top: 0;
            left: 0; 
            width: 100%; 
            z-index: 1000;
            opacity: 0;
            animation: fadeIn 2s forwards; /* Transición al cargar */
            color: black;
        }

        /* Animación para desvanecer el menú */
        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }

        /* Color de los enlaces de la barra de navegación */
        #menuBarra ul li a {
            color: black;
            text-decoration: none;
            transition: color 0.3s ease; /* Transición de color */
        }

        #menuBarra ul li a:hover {
            color: #9b5f1b;
        }

        /* Sección de inicio */
        .inicio-section {
            background-image: linear-gradient(rgba(0, 0, 0, 0.82), rgba(0, 0, 0, 0.691)), url('images/fondo.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            opacity: 0;
            transition: opacity 0.5s ease-out 0.3s;
        }

        .inicio-section.loaded {
            opacity: 1;
        }

        /* Logo */
        .logo {
            max-width: 200px;
            margin-bottom: 20px;
            transition: 0.5s ease;
        }

        .titulo {
            font-family: 'Poppins', sans-serif;
            font-weight: 700; /* Grosor de la fuente */
            font-size: 48px;  /* Tamaño del texto principal */
            color: #ffffff; /* Color del texto */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Sombra de texto */
            margin: 0;
        }

        /* Slogan */
        .slogan {
            font-family: 'Poppins', sans-serif;
            font-weight: 400; /* Grosor de la fuente */
            font-size: 24px;  /* Tamaño del texto secundario */
            color: #ffffff; /* Color del texto */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Sombra de texto */
            margin: 0;
            margin-top: 10px; /* Espacio entre el título y el slogan */
        }

        /* Estilos para las tarjetas (cards) */
        .card {
            transition: transform .3s; 
        }

        .card:hover {
            transform: scale(1.05); 
        }

        .card a {
            color: #f2f8ff; 
        }

        .card {
            margin-bottom: 20px;
        }

        .card img {
            max-width: 100%;
            height: auto;
        }

        .card a:hover {
            color: #000000; 
            text-decoration: none; 
        }

        .card .card-img-top {
            transition: transform .3s;
        }

        .card:hover .card-img-top {
            transform: scale(1.1);
        }

        /* Estilos generales del body */
        body {
            font-family: 'Roboto', sans-serif;
        }

        /* Sombras y transiciones en las tarjetas */
        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        .card-title {
            font-weight: bold;
        }

        /* Botón principal */
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.3s, border-color 0.3s; /* Transición de color */
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        /* Nuevos estilos para mejorar el menú */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            color: #fff;
            background: url('fondo.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        /* Encabezado */
        .header {
            background: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Logo */
        .logo img {
            width: 130px;
            height: 90px;
        }

        /* Menú */
        .menu {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            transition: all 0.3s ease; /* Transición para el menú */
        }

        .menu li {
            margin: 0 15px;
            position: relative;
        }

        .menu li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            font-size: 18px;
            transition: color 0.3s ease; /* Transición de color */
        }

        .menu li a:hover {
            color: #f0a500;
        }

        .bot-color {
            color: #ffffff;
            background-color: #975811;
            border-radius: 18px;
        }

        .bot-color:hover {
            color: #ffffff;
            background-color: #322100;
            border-radius: 13px;
        }
        .bot-login {
            color: #ffffff;
            background-color: #975811;
            margin-left: 20px;
            border-radius: 18px;
        }
        .bot-login:hover {
            color: #ffffff;
            background-color: #322100;
            transform: scale(1.1);
            box-shadow: 0 15px 25px rgb(0, 0, 0, 0.2);
            transform: transition(3s) ;
            border-radius: 13px;
        }
        /* Toggle del menú */
        .menu-toggle {
            display: none;
            background: none;
            border: none;
            color: #fff;
            font-size: 24px;
        }

        /* Introducción */
        .intro {
            text-align: center;
            margin-top: 20%;
            opacity: 0;
            animation: fadeIn 2s forwards; /* Transición al cargar */
        }

        .intro h1 {
            font-size: 48px;
            margin: 0;
            transition: color 0.3s ease; /* Transición de color */
        }

        .intro p {
            font-size: 24px;
            margin: 0;
            transition: color 0.3s ease; /* Transición de color */
        }

        .intro h1:hover,
        .intro p:hover {
            color: #f0a500;
        }

        /* Media query para dispositivos móviles */
        @media (max-width: 768px) {
            .menu {
                display: none;
                flex-direction: column;
                width: 100%;
                text-align: center;
                background: rgba(0, 0, 0, 0.8);
                position: absolute;
                top: 60px;
                left: 0;
            }

            .menu-toggle {
                display: block;
            }

            .menu.active {
                display: flex;
            }

            .menu li {
                margin: 10px 0;
            }
        }

    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg" id="menuBarra">
        <a class="navbar-brand" href="#">
            <!-- <img src="/images/logotipo sinfondo.png" width="175" height="110" class="d-inline-block align-top" alt="Logo">  -->
            <img src="{{ asset('images/logotipo_sinfondo.png') }}" width="175" height="110" class="d-inline-block align-top" alt="Logo"> 
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: white;">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/biblioteca')}}">Cabañas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/nosotros') }}">Galeria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contactanos') }}">Contactanos</a>
                </li>
                <li class="nav-item">
                    
                    <a class="nav-link bot-color" href="{{ url('reservations/create') }}">Hacer Reservacion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bot-login" href="{{ url('/login') }}">Login</a>
                </li>
                <!-- <li><a href="{{ route('reservations.index') }}">Mis Reservaciones</a></li>
                <li><a href="{{ route('reservations.create') }}">Crear Reservación</a></li> -->
            </ul>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>

    <!-- Scripts -->
    <script>
        // Mostrar la sección de inicio con una transición después de que la página se haya cargado
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelector(".inicio-section").classList.add("show");
        });

        // Cambiar el color de fondo del menú cuando se hace scroll
        window.addEventListener("scroll", function() {
            var menuBarra = document.getElementById("menuBarra");
            if (window.scrollY > 100) {
                menuBarra.style.backgroundColor = "var(--bg-color)";
            } else {
                menuBarra.style.backgroundColor = "white";
            }
        });
    </script>
    
</body>
</html>
