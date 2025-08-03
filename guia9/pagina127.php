<?php
// Función que genera correo electrónico según nombre, apellido y edad
function generarCorreo($nombre, $apellido, $edad) {
    $nombre = trim($nombre);
    $apellido = trim($apellido);
    $edad = trim($edad);

    if ($nombre != "" && $apellido != "" && is_numeric($edad)) {
        $inicial = strtolower(substr($nombre, 0, 1));
        $apellido = strtolower(str_replace(' ', '', $apellido));
        return $inicial . $apellido . $edad . "@Orrego.com";
    } else {
        return "Datos inválidos";
    }
}

// Lectura de datos
$nombres   = isset($_POST['persona']['nombre']) ? $_POST['persona']['nombre'] : array();
$apellidos = isset($_POST['persona']['apellido']) ? $_POST['persona']['apellido'] : array();
$edades    = isset($_POST['persona']['edad']) ? $_POST['persona']['edad'] : array();

// Mostrar formulario
echo "<form name=form1 method=POST>
<h3>Ingrese los datos de tres personas:</h3>";
for ($i = 1; $i <= 3; $i++) {
    $nom = isset($nombres[$i]) ? $nombres[$i] : '';
    $ape = isset($apellidos[$i]) ? $apellidos[$i] : '';
    $eda = isset($edades[$i]) ? $edades[$i] : '';

    echo "Persona $i:<br>";
    echo "Nombre: <input type=text name='persona[nombre][$i]' value=\"$nom\"><br>";
    echo "Apellido: <input type=text name='persona[apellido][$i]' value=\"$ape\"><br>";
    echo "Edad: <input type=text name='persona[edad][$i]' value=\"$eda\"><br><br>";
}
echo "<input type=submit name=ok value='Generar Correos'><br>";
echo "</form>";

// Procesamiento
if (isset($_POST['ok'])) {
    echo "<h3>Correos generados:</h3>";
    for ($i = 1; $i <= 3; $i++) {
        $correo = generarCorreo($nombres[$i], $apellidos[$i], $edades[$i]);
        echo "Persona $i: <b>$correo</b><br>";
    }
}
?>
