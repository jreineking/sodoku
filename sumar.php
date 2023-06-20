<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sodoku Matemático</title>
    <link rel="stylesheet" href="estilo_sumar.css">
    <!-- link iconos de de los botones cronometro -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<header>
    <?php include "header.php"; ?> 
</header>
<body> 
    <br>
    <div class="contenedor">
        <h1>SUMAR</h1>
        <!-- Elaboramos una tabla de 5 columnas y filas -->
        <table>
            <!-- ondrop=que pasa cuando se suelta el elemento arrastrado -->
            <!-- ondragover= especifico donde se suelta el elemento arrastrado -->
            <tr>
                <td class="contiene">26</td>
                <td class="contiene">+</td>
                <td class="no-contiene" id="0" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                <td class="contiene">=</td>
                <td class="contiene">42</td>
            </tr>
            <tr>
                <td class="contiene">+</td>
                <td></td>
                <td class="contiene">+</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="no-contiene" id="1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                <td class="contiene">+</td>
                <td class="no-contiene" id="2" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                <td class="contiene">=</td>
                <td class="contiene">10</td>
            </tr>
            <tr>
                <td class="contiene">=</td>
                <td></td>
                <td class="contiene">=</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="contiene">35</td>
                <td class="contiene">+</td>
                <td class="no-contiene" id="3" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                <td class="contiene">=</td>
                <td class="no-contiene" id="4" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            </tr>            
        </table>
        <br>
        <div class="contenedor-alternativa">
            <!-- ondragstart=que debe suceder cuando se arrastra el elemento -->
            <!-- draggable=el elemento se puede arrastrar-->
            <div class="caja" draggable="true" ondragstart="drag(event)" id="a">52</div>
            <div class="caja" draggable="true" ondragstart="drag(event)" id="b">1</div>
            <div class="caja" draggable="true" ondragstart="drag(event)" id="c">17</div>
            <div class="caja" draggable="true" ondragstart="drag(event)" id="d">16</div>
            <div class="caja" draggable="true" ondragstart="drag(event)" id="e">9</div>
        </div>
        <br>
        <!-- reloj -->
        <div class="marco">
            <div class="tiempo" id="tiempo">00:00:00.000</div>
            <div class="botones-contenedor">
                <div class="btn" onclick="iniciar()">
                <i class="fas fa-play"></i>
                </div>
                <div class="btn" onclick="pausar()">
                <i class="fas fa-pause"></i>
                </div>
                <div class="btn" onclick="reiniciar()">
                <i class="fas fa-undo-alt"></i>
                </div>
            </div>
        </div>
        <!-- fin reloj -->      
        <br>
        <!--visualizar resultado -->
        <div class="resultado">
            <h2 ></h2>
        </div>
        <!-- fin visualizar resultado -->
    </div> 
    <script src="sumar.js"></script>
    <script src="tiempo.js"></script>
</body>
</html>