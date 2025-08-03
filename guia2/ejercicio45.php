<?php
if(isset($_POST['n'])){
    $num = $_POST['n'];
}else{
    $num = 0;
}

echo "<form method=post style='background-color: lightblue'>
<h2>Piramide de números</h2>
Ingrese el número: <input type=number name=n value=$num min=1>
<input type=submit value=Generar><br>
</form>";

/*…….programación………….*/ 
for($i = $num; $i >= 1; $i--){
        for($j = 1; $j <= $i; $j++){
            echo $j;
        }
        echo "<br>";
    }
    echo ".......";
    echo "</pre>";;
?>