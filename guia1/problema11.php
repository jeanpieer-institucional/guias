<?php
/**Problema 11:
Ingresar el dato edad y verificar si “ES MAYOR DE EDAD”
o “NO ES MAYOR DE EDAD
*/

if (isset($_POST['edad'])){
    $edad=$_POST['edad'];
}else{
    $edad=0;
}

echo "<form method=POST>
<h1>Verifica la mayoria de edad</h1>
Edad: <input type=number name=edad valor=$edad><br>
<input type=submit name=verifica value=Verificar>
</form>";

$mayor=$edad>=18 && $edad<=100;
$menor=$edad<=19 && $edad>=1;

if (isset($_POST['edad'])){
    echo "=============================<br>";
    if ($mayor){
        echo "Es mayor de edad";
    }else if ($menor){
        echo "No es mayor de edad";
    }else{
        echo "Edad no valida";
    }
}
?>