<?php
/* Ingresar la velocidad de un automóvil, el tiempo que demoro en viajar
y calcular la distancia recorrida. */

if (isset($_POST['velocidad'])) {
    $velocidad = $_POST['velocidad'];
    $tiempo = $_POST['tiempo'];
} else {
    $velocidad = 0;
    $tiempo = 0;
}

echo "<form method=post>
<h1>Calcular Distancia Recorrida</h1>
Velocidad: <input type=text name=velocidad valor=$velocidad><br>
Tiempo: <input type=text name=tiempo valor=$tiempo><br>
<input type=submit name=calcular value=Calcular>
</form>";

if (isset($_POST['calcular'])) {
    if ($velocidad > 0 && $tiempo > 0) {
        $distancia = $velocidad * $tiempo;
        echo "La distancia recorrida es: $distancia km";
    } else {
        echo "La velocidad y el tiempo deben ser mayores a cero.";
    }
}

?>