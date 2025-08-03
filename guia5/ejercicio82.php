<?php

if (isset($_POST['monto'])){
    $monto = $_POST['monto'];
    $combo1 = $_POST['combo1'];
    $interes = $combo1 * $monto;
    $total = $monto + $interes;
} else {
    $monto = "";
    $combo1 = 0;
    $interes = 0;
    $total = 0;
}

echo "<form method='post' style='background-color: lightblue; padding: 20px; border-radius: 10px'>
<select name='combo1'>
    <option value='0.04'>Ahorro</option>
    <option value='0.02'>Cuenta Corriente</option>
    <option value='0.07'>Plaza Fija</option>
</select><br>
MONTO DEPOSITADO <input type='number' name='monto' value=$monto>
<input type='submit' name='ok' value='Calcular'><br>
---------------------------------------------------------------<br>
INTERÉS = $interes<br>
</form>";