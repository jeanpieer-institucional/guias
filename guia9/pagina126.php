<?php
// Función que verifica si todas las notas están entre 0 y 20
function notasValidas($notas) {
    foreach ($notas as $nota) {
        if (!is_numeric($nota) || $nota < 0 || $nota > 20) {
            return false;
        }
    }
    return true;
}

// Leer las notas ingresadas
$notas = isset($_POST['nota']) ? $_POST['nota'] : array();

// Mostrar formulario
echo "<form name=form1 method=POST>
Ingrese cinco notas (de 0 a 20):<br>";
for ($i = 1; $i <= 5; $i++) {
    $valor = isset($notas[$i]) ? $notas[$i] : '';
    echo "<input type=text name='nota[$i]' value=\"$valor\"><br>";
}
echo "<input type=submit name=ok value='Enviar'><br>";
echo "</form>";

// Procesamiento
if (isset($_POST['ok'])) {
    if (notasValidas($notas)) {
        $suma = array_sum($notas);
        $promedio = $suma / count($notas);
        echo "Todas las notas son válidas.<br>";
        echo "Promedio: <b>" . number_format($promedio, 2) . "</b>";
    } else {
        echo "Error: Todas las notas deben ser números entre 0 y 20.";
    }
}
?>
