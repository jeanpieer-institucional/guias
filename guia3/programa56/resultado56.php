<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $caracter = $_POST['caracter'];
    $longitud = strlen($nombre);
    } else {
    $nombre = "";
    $caracter = "";
    $longitud = "";
    }
    echo "<h2>Resultado:</h2>";
    
    for ($i = 0; $i < $longitud; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo $nombre[$j] . " ";
        }
        for ($k = $i + 1; $k < $longitud; $k++) {
            echo $caracter . " ";
        }
        echo "<br>";
    }
?>