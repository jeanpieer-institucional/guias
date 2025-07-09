<?php
if(isset($_POST['n'])){
    $num=$_POST['n'];
    $sumaDivisores=0;
}else{
    $num=0;
    $sumaDivisores=0;
}
//Diseño
echo "<form method=post style='background-color: lightblue'>
<h2>Verificar si el números es perfecto o no</H2>
Ingrese un número: <input type=number name=n value=$num>
<input type=submit value=Enviar><br>
</form>";
//Programación
for ($i = 1; $i < $num; $i++) {
        if ($num % $i == 0) {
            $sumaDivisores += $i;
        }
}  
if ($sumaDivisores == $num) {
    echo "El número $num es perfecto";
} else {
    echo "El número $num no es perfecto";
}
?>