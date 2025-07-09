<?php
if(isset($_POST['altura'])){
    $altura=$_POST['altura'];
    $base=$_POST['base'];
}else{
    $base=0;
    $altura=0;
}

echo "<h1>Calculando el area de un triángulo:\n</h1>";

echo "<form method=POST>
Ingrese la base: <input type=number name=base valor=$base><br>
Ingrese la altura: <input type=number name=altura valor=$altura><br>
<input type=submit name=calcular value=Calcule>
</form>";
echo "=============================<br>";
if(isset($_POST['altura'])){
$area=($base*$altura)/2;
echo "El area del triángulo es: $area";
}
?>