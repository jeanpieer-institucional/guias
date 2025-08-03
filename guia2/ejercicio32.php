<?php
if(isset($_POST['n'])){
    $n=$_POST['n'];
}else{
    $n="";
}
//Diseño
echo "<form method=post style=background-color: lightblue>
<h2>Mostrar tu nombre 10 veces de forma horizontal</h2>
Ingrese un nombre: <input type=text name=n value=$n>
<input type=submit value=Enviar><br>
</form>";

for($i =1 ; $i <= 10; $i++){
    echo " $n <br>";
}

?>