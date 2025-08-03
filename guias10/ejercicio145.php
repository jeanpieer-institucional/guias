<?php
echo "<form method='post'>";
echo "Filas: <input type='number' name='filas' min='1' required> ";
echo "Columnas: <input type='number' name='columnas' min='1' required> ";
echo "<input type='submit' name='generar' value='Enviar'><br><br>";
if (isset($_POST['generar']) && is_numeric($_POST['filas']) && is_numeric($_POST['columnas'])) {
    $filas = intval($_POST['filas']);
    $columnas = intval($_POST['columnas']);
    $contador = 1;
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    for ($i = 1; $i <= $filas; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $columnas; $j++) {
            echo "<td>CELDA:$contador</td>";
            $contador++;
        }
        echo "</tr>";
    }
    echo "</table><br>";
}
echo "</form>";
?>
