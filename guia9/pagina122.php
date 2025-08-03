<?php
// Función para validar si todos los valores son numéricos
function validarNumeros($arr) {
    foreach ($arr as $valor) {
        if (!is_numeric($valor)) {
            return false;
        }
    }
    return true;
}

// Lectura de datos
$n1 = isset($_POST['num'][1]) ? $_POST['num'][1] : '';
$n2 = isset($_POST['num'][2]) ? $_POST['num'][2] : '';
$n3 = isset($_POST['num'][3]) ? $_POST['num'][3] : '';

// Mostrar formulario
echo "<form name=form1 method=POST>
Ingrese tres números:<br>
<input type=text name='num[1]' value=\"$n1\"><br>
<input type=text name='num[2]' value=\"$n2\"><br>
<input type=text name='num[3]' value=\"$n3\"><br>
<input type=submit name=ok value='Enviar'><br>
</form>";

// Procesamiento
if (isset($_POST['ok'])) {
    $numeros = [1 => $n1, 2 => $n2, 3 => $n3];

    if (validarNumeros($numeros)) {
        echo "Todos los datos ingresados son numéricos.<br>";
        echo "Valores ingresados: $n1, $n2, $n3";
    } else {
        echo "Error: Uno o más datos no son numéricos.";
    }
}
?>
