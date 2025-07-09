<?php
if(isset($_POST['n'])){
    $num=$_POST['n'];
}else{
    $num=0;
}
//Diseño
echo "<form method=post style='background-color: lightblue'>
<h2>Verificar si el números es perfecto o no</H2>
Ingrese un número: <input type=number name=n value=$num>
<input type=submit value=Enviar><br>
</form>";
//Programación
for ($i = 1; $i <= $num; $i++) {
        for ($j = 1; $j <= $num; $j++) {
            echo $j;
        }
        if ($i < $num) {
            echo "...<br>";
        } else {
            echo "...<br>";
        }
    }
?>