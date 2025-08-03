<?php
echo "<form method='post'>";
if (isset($_POST['tabla88'])) {
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    for ($i = 1; $i <= 8; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 8; $j++) {
            echo "<td>CELDA:$i,$j</td>";
        }
        echo "</tr>";
    }
    echo "</table><br>";
}
echo "<input type='submit' name='tabla88' value='Generar Tabla 8x8'>";
echo "</form>";
?>
