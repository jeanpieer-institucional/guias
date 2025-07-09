<?php
if(isset($_POST['n'])){
    $num = $_POST['n'];
}else{
    $num = 0;
}

// Diseño (igual que el original)
echo "<form method=post style='background-color: lightblue'>
<h2>Encontrar si el número ingresado es primo o no</h2>
Ingrese un número: <input type=number name=n value=$num>
<input type=submit value=Enviar><br>
</form>";

// Lógica corregida para verificar números primos
if($num <= 1) {
    echo "No es primo (los números primos son mayores que 1)";
} else {
    $esPrimo = true;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $esPrimo = false;
            break;
        }
    }
    echo $esPrimo ? "Es primo" : "No es primo";
}
?>