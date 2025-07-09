<?php
if(isset($_POST['n'])){
    $n=$_POST['n'];
}else{
    $n=0;
}
//Diseño
echo "<form method=post style='background-color: lightblue'>
<h2>Ingresar un número y mostrar los números menores a él</H2>
Ingrese un número: <input type=number name=n>
<input type=submit value=Enviar><br>
</form>";
//Programación
for ($i=1;$i<$n;$i++) {
echo " $i ";
}
?>