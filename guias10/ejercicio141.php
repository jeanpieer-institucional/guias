<?php
echo "<form name='form1' method='post'>";
if (isset($_POST['conceptos'])) {
    $conceptos = ["Matrícula", "Pensión", "Laboratorio", "Seguro", "Certificación"];
    echo "<p>Seleccione los conceptos:</p>";
    foreach ($conceptos as $concepto) {
        echo "<label><input type='checkbox' name='conceptos[]' value='$concepto'> $concepto</label><br>";
    }
    echo "<br>";
}
echo "<input type='submit' name='conceptos' value='Mostrar Conceptos'>";
echo "</form>";
?>
