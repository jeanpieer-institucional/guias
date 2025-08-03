<?php
echo "<form name='form1' method='post'>";

if (isset($_POST['distritos'])) {
    $distritos = ["Lima", "Miraflores", "San Isidro", "Surco", "Callao"];
    echo "<p>Seleccione un distrito:</p>";
    echo "<select name='distrito'>";
    foreach ($distritos as $distrito) {
        $selected = ($distrito == "Miraflores") ? "selected" : "";
        echo "<option value='$distrito' $selected>$distrito</option>";
    }
    echo "</select><br><br>";
}

echo "<input type='submit' name='distritos' value='Mostrar Distritos'>";
echo "</form>";
?>
