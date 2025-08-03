<?php
echo "<form name='form1' method='post'>";
echo "Ingrese un número: <input type='number' name='n' min='1'><br><br>";
if (isset($_POST['ok']) && isset($_POST['n']) && is_numeric($_POST['n'])) {
    $n = intval($_POST['n']);
    for ($i = 1; $i <= $n; $i++) {
        $nombreCaja = "text" . $i;
        echo "<input type='text' name='$nombreCaja' size='40' value='$nombreCaja'><br>";
    }
    echo "<br>";
}
echo "<input type='submit' name='ok' value='Enviar'>";
echo "</form>";
?>
