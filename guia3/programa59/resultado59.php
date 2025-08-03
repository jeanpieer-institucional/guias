<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $longitud = strlen($nombre);
    } else {
    $nombre = "";
    $longitud = "";
}
    echo "<h2>Resultado:</h2>";
    for ($i = $longitud; $i > 0; $i--) {
        echo substr($nombre, 0, $i) . "<br>";
    }
?>