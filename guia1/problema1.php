<?php
/*PROBLEMA 1:
Diseñar y programar una página que permita sumar
dos números.*/
if ( isset($_POST['num1'])) {
    $number1 = $_POST['num1'];
    $number2 = $_POST['num2'];
} else {
    $number1 = 0;
    $number2 = 0;
}

echo "<form method=POST >
<div class=container>
<h1>Suma de dos números</h1>
Primer número <input type=number name=num1 valor=$number1><br>
Segundo número <input type=number name=num2 valor=$number2><br>
<input type=submit name=sumarnumeros value=sumar>
</div>
</form>";
$suma=$number1+$number2;
echo "suma = $suma";
?>