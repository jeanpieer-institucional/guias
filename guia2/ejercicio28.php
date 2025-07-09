<?php
if(isset($_POST['n'])){
    $n=$_POST['n'];
    $suma=0;
}else{
    $n=0;
    $suma=0;
}
//Diseño
echo "<form method=post style='background-color: lightblue'>
<h2>Suma de los primeros 'n' números</h2>
Ingrese un número: <input type=number name=n value=$n>
<input type=submit value=Enviar><br>
</form>";
//Programación
for ($i = 1; $i < $n; $i++) {
    $suma+=$i;
    echo " $i ";
}
echo "<br> Suma: $suma ";
?>