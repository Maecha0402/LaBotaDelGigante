@extends('layouts.welcome_layout')

    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            padding: 20px;
        }
        .section {
            width: 30%;
            color: black;
        }
        .section img {
            width: 100%;
            height: auto;
        }
        .section h2 {
            background-color: #8B4513;
            color: white;
            padding: 10px;
            text-align: center;
        }
        .section ul {
            list-style-type: none;
            padding: 0;
        }
        .section ul li {
            padding: 5px 0;
        }
        .button {
            display: block;
            width: 100%;
            text-align: center;
            background-color: #8B4513;
            color: white;
            padding: 10px;
            text-decoration: none;
            margin-top: 20px;
        }
        .button:hover {
            background-color: #A0522D;
        }
    </style>

    <div class="container">
        <div class="section">
            <img src="images/habi-santo.png" alt="Imagen de la habitación">
        </div>
        <div class="section">
            <h2>INCLUYE</h2>
            <ul>
                <li>Cama Doble</li>
                <li>Sofácame</li>
                <li>Baño Privado</li>
                <li>Wifi - Tv</li>
                <li>Alexa - Karaoke</li>
                <li>Parqueo Privado</li>
                <li>Desayuno</li>
                <li>Botella De Vino</li>
                <li>Zona BBQ</li>
                <li>Piscina Privada</li>
                <li>Malla Catamarán</li>
                <li>Hamaca</li>
                <li>Fogata</li>
            </ul>
        </div>
        <div class="section">
            <h2>VALOR PAREJA POR NOCHE</h2>
            <ul>
                <li>Domingos A Jueves - $315.000</li>
                <li>Temp. Alta Y Festivos - $515.000</li>
                <li>Viernes Y Sábados - $415.000</li>
            </ul>
            <h2>SERVS. ADICIONALES</h2>
            <ul>
                <li>Almuerzo</li>
                <li>Cena</li>
                <li>Decoración</li>
                <li>Mini Bar</li>
            </ul>
            <a href="" class="button">Regresar</a>
        </div>
    </div>

@include('layouts.footer_layout')