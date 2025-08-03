<?php
/*PROBLEMA 3:
Ingresar un número y determinar si es par o
impar.*/
if (isset($_POST['numero'])){
    $numero=$_POST['numero'];
}else{
    $numero=0;
}
echo "<h2>Comparando si el número es par o impar</h2>";
echo "Ingrese un número:";
echo "<form method=POST >
Ingrese el número <input type=number name=numero valor=$numero><br>
<input type=submit name=determina value=Calcular >
</form>";
echo "=============================<br>";

if (isset($_POST['numero'])){
    if ($numero % 2 == 0){
        echo "El número $numero es par";
    }else{
        echo "El número $numero es impar";
    }
}
?>