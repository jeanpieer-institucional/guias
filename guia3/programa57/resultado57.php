<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $longitud = strlen($nombre);
    } else {
    $nombre = "";
    $longitud = "";
}
    echo "<h2>Resultado:</h2>";
    
    for ($i = 0; $i < $longitud; $i++) {
        echo $nombre[$i] . "<br>";
    }
?>