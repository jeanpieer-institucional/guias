<?php
if(isset($_POST['n'])){
    $num=$_POST['n'];
    $suma=0;
}else{
    $num=0;
    $suma=0;
}
//Diseño
echo "<form method=post style='background-color: lightblue'>
<h2>Encontrar divisores de un número y sumarlos</h2>
Ingrese un número: <input type=number name=n value=$num>
<input type=submit value=Enviar><br>
</form>";
echo "Divisores: ";
//Programación
for ($i = 1; $i <= $num; $i++) {
    if($num % $i == 0){
        echo " $i ";
        $suma+=$i;
    }
}
echo "<br>Suma de Divisores: $suma";
?>