<?php
/* Convertir soles a dólares */
if (isset($_POST['soles'])){
    $soles=$_POST['soles'];
}else{
    $soles=0;
}
echo "<form method=POST>
<h1>Convertir soles a dólares</h1>
Cantidad soles: <input type=number name=soles valor=$soles><br>
<input type=submit name=calculo value=Calcular>
</form>";

if (isset($_POST['soles'])){
    $dolar=$soles/3.66;
    echo "=============================<br>";
    echo "La cantidad en dolares son: $".number_format($dolar,2);
}
?>