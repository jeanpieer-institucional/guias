<?php
// Función que elimina todos los espacios en blanco de una oración
function quitarEspacios($texto) {
    return str_replace(' ', '', $texto);
}

// Lectura de oraciones ingresadas
$oracion1 = isset($_POST['texto'][1]) ? $_POST['texto'][1] : '';
$oracion2 = isset($_POST['texto'][2]) ? $_POST['texto'][2] : '';
$oracion3 = isset($_POST['texto'][3]) ? $_POST['texto'][3] : '';

// Mostrar formulario
echo "<form name=form1 method=POST>
Ingrese tres oraciones:<br>
<input type=text name='texto[1]' value=\"$oracion1\"><br>
<input type=text name='texto[2]' value=\"$oracion2\"><br>
<input type=text name='texto[3]' value=\"$oracion3\"><br>
<input type=submit name=ok value='Enviar'><br>
</form>";

// Procesamiento
if (isset($_POST['ok'])) {
    echo "Resultados sin espacios:<br>";
    echo "1: <b>" . quitarEspacios($oracion1) . "</b><br>";
    echo "2: <b>" . quitarEspacios($oracion2) . "</b><br>";
    echo "3: <b>" . quitarEspacios($oracion3) . "</b><br>";
}
?>
