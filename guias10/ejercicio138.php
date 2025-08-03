<?php
echo "<form name='form1' method='post'>";
echo "Ingrese un número: <input type='number' name='n' min='1'><br><br>";
if (isset($_POST['ok'])) {
    $n = intval($_POST['n']);
    for ($i = 1; $i <= $n; $i++) {
        echo "Caja $i: <input type='text' name='caja$i' size='40'><br>";
    }
    echo "<br>";
}
echo "<input type='submit' name='ok' value='Enviar'>";
echo "</form>";
?>
