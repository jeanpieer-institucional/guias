<?php
/*PROBLEMA 7:
Calcular el promedio de tres números.  */
if (isset($_POST['num1'])){
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];
} else {
// Si no se han enviado datos, inicializamos las variables
$num1=0;
$num2=0;
$num3=0;
}

echo "<h1>Calcular el Promedio de 3 números</h1>";
echo "<h2>Ingrese los números:</h2>";
echo "<form method=POST>
Primer número <input type=number name=num1 valor=$num1><br>
Segundo número <input type=number name=num2 valor=$num2><br>
Tercer número <input type=number name=num3 valor=$num3><br>
<input type=submit name=promedio value=Promedio>
</form>";
if (isset($_POST['num1'])){
    echo "=============================<br>";
    $promedio=($num1+$num2+$num3)/3;
    echo "Promedio = $promedio";
}
?>