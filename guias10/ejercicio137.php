<?php
echo "<form name='form1' method='post'>";

if (isset($_POST['ok'])) {
    echo "<label>Turno: ";
    echo "<select name='turno'>";
    echo "<option value='mañana'>Mañana</option>";
    echo "<option value='tarde' selected>Tarde</option>";
    echo "<option value='noche'>Noche</option>";
    echo "</select>";
    echo "</label><br><br>";
}

echo "<input type='submit' name='ok' value='Enviar'>";
echo "</form>";
?>
