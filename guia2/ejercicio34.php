<?php
if(isset($_POST['nombre'])){
    $nom=$_POST['nombre'];
    $num=$_POST['numero'];
}else{
    $nom="";
    $num=0;
}
//Diseño
echo "<form method=post>
<h2>Ingrese un nombre y un número ‘n’ y mostrar el nombre ‘n’ veces</h2>
Ingrese un nombre <input type=text name=nombre value=$nom><br>
Repetir <input type=text name=numero value=$num>
<input type=submit value=Enviar>
</form>
";
//Programación
for ($i=1;$i<=$num;$i++){
    echo " $nom <br>";
}

?>