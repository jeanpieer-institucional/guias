<?php
if(isset($_POST['n'])){
    $num = $_POST['n'];
}else{
    $num = 0;
}
echo "<form method=post style='background-color: lightblue'>
<h2>Generar cuadrado de números repetidos</h2>
Ingrese el tamaño del cuadrado: <input type=number name=n value=$num min=1>
<input type=submit value=Generar><br>
</form>";
for ($i = 1; $i <= $num; $i++) {
        for ($j = 1; $j <= $num; $j++) {
            echo $i;
        }
        if ($i < $num) {
            echo "...<br>";
        } else {
            echo "...<br>";
        }
    }
?>