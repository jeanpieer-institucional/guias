<?php
if(isset($_POST['n'])){
    $n=$_POST['n'];
}else{
    $n=0;
}
//Diseño
echo "<form method=post style='background-color: lightblue'>
<h2>Mostrar los números que terminen en 2 o 3 menores o iguales a él</h2>
Ingrese un número: <input type=number name=n value=$n>
<input type=submit value=Enviar><br>
</form>";
//Programación
for ($i = 1; $i <= $n; $i++) {
    if($i % 10 ==2 || $i % 10 == 3){
        echo " $i ";
    }
}
?>