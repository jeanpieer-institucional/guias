<?php
// Función para validar que todos los valores contengan solo letras y espacios
function soloLetras($arr) {
    foreach ($arr as $valor) {
        if (!preg_match('/^[a-zA-ZÁÉÍÓÚÑáéíóúñ\s]+$/', $valor)) {
            return false;
        }
    }
    return true;
}

// Lectura de datos
$nombre   = isset($_POST['datos']['nombre']) ? $_POST['datos']['nombre'] : '';
$apellido = isset($_POST['datos']['apellido']) ? $_POST['datos']['apellido'] : '';
$carrera  = isset($_POST['datos']['carrera']) ? $_POST['datos']['carrera'] : '';

// Mostrar formulario
echo "<form name=form1 method=POST>
Ingrese el nombre:<br>
<input type=text name='datos[nombre]' value=\"$nombre\"><br>
Ingrese el apellido:<br>
<input type=text name='datos[apellido]' value=\"$apellido\"><br>
Ingrese la carrera:<br>
<input type=text name='datos[carrera]' value=\"$carrera\"><br>
<input type=submit name=ok value='Enviar'><br>
</form>";

// Procesamiento
if (isset($_POST['ok'])) {
    $entradas = [$nombre, $apellido, $carrera];

    if (soloLetras($entradas)) {
        echo "Todos los datos son válidos y contienen solo letras.<br>";
        echo "Nombre: <b>$nombre</b><br>";
        echo "Apellido: <b>$apellido</b><br>";
        echo "Carrera: <b>$carrera</b>";
    } else {
        echo "Error: Uno o más campos contienen caracteres no válidos. Solo se permiten letras.";
    }
}
?>
