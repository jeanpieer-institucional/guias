<?php
echo "<form name=form1 method='post'>";
if (isset($_POST['ok'])){
    $valor = 0.18;
    echo "<input type='checkbox' name='IGV' value='$valor' checked> Impuesto <br>";
}
echo "<input type='submit' name=ok value='Enviar'>";
echo "</form>";
?>