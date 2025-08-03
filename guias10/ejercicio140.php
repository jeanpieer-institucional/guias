<?php
echo "<form name='form1' method='post'>";
if (isset($_POST['ok'])) {
    echo "<p>Seleccione una carrera:</p>";
    $carreras = ["Computación e Informática", "Contabilidad", "Administración", "Electrónica", "Mecatrónica"];
    foreach ($carreras as $index => $carrera) {
        echo "<label><input type='radio' name='carrera' value='$carrera'" . ($index == 0 ? " checked" : "") . "> $carrera</label><br>";
    }
    echo "<br>";
}
echo "<input type='submit' name='ok' value='Mostrar Carreras'>";
echo "</form>";
?>