<?php
/**
 * Ingresar dos números y evaluar el mayor de ellos.
 */
if (isset($_POST['numero'])){
    $numero=$_POST['numero'];
    $numero2=$_POST['numero2'];
}else{
    $numero=0;
    $numero2=0;
}
echo "<form method=POST>
<h1>Ingresar dos números y evaluar el mayor de ellos</h1>
Número 1: <input type=number name=numero valor=$numero><br>
Número 2: <input type=number name=numero2 valor=$numero2><br>
<input type=submit name=calculo value=Calcular>
</form>";

if (isset($_POST['numero'])){
    echo "=============================<br>";
    if($numero>$numero2){
        echo "El número $numero es mayor";
    }else{
        echo "El número $numero2 es mayor";
    }
}
?>