<?php
    // echo "Procesar información";
    $nombre = isset($_GET['nombre'])? $_GET['nombre'] : $_POST['nombre'];
    $apellido = isset($_GET['apellido'])? $_GET['apellido'] : $_POST['apellido'];

    echo "Hola {$nombre} {$apellido}, bienvenido a CodeMundo.";
