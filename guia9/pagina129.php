<?php
// Función que evalúa la operación matemática de forma segura
function calcularOperacion($expresion) {
    // Eliminar espacios en blanco
    $expresion = str_replace(' ', '', $expresion);

    // Validar que la expresión solo contenga números, operadores básicos y punto decimal
    if (preg_match('/^[0-9\+\-\*\/\.]+$/', $expresion)) {
        // Evaluar la operación usando eval con control
        try {
            @eval("\$resultado = $expresion;");
            if (isset($resultado)) {
                return $resultado;
            } else {
                return "Expresión inválida.";
            }
        } catch (Exception $e) {
            return "Error al calcular.";
        }
    } else {
        return "Solo se permiten números y operaciones + - * /";
    }
}

// Lectura de expresión ingresada
$expresion = isset($_POST['operacion']) ? $_POST['operacion'] : '';

// Mostrar formulario
echo "<form name=form1 method=POST>
Ingrese una operación (Ej: 5+3, 10/2, 4*7, 8-2):<br>
<input type=text name='operacion' value=\"$expresion\"><br>
<input type=submit name=ok value='Calcular'><br>
</form>";

// Procesamiento
if (isset($_POST['ok']) && $expresion !== '') {
    $resultado = calcularOperacion($expresion);
    echo "Resultado: <b>$resultado</b>";
}
?>
