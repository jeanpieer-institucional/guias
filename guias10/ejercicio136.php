<?php
echo "<form name=form1 method='post'>";
if (isset($_POST['ok'])){
    echo "<input type='radio' name='radio' value='M' checked> Masculino <br>";
    echo "<input type='radio' name='radio' value='F'> Femenino <br>";
}
echo "<input type='submit' name=ok value='Enviar'>";
echo "</form>";
?>