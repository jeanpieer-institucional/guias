<?php
/* Determinar cuanto ganará una persona en base a las horas trabajadas.
Tomando en cuenta el pago por hora. */

if (isset($_POST['horas'])) {
    $horas = $_POST['horas'];
    $pagoPorHora = $_POST['pago'];
} else {
    $horas = 0;
    $pagoPorHora = 0;
}

echo "<form method=POST>
<h1>Calculo de salario</h1>
Horas trabajadas: <input type=number name=horas valor=$horas><br>
Pago por hora: <input type=text name=pago valor=$pagoPorHora><br>
<input type=submit name=calcular value=Calcular>
</form>";

if (isset($_POST['horas'])) {
    $salario = $horas * $pagoPorHora;

    echo "=============================<br>";
    echo "Horas trabajadas: $horas<br>";
    echo "Pago por hora: $pagoPorHora<br>";
    echo "Salario total: $salario<br>";
}


?>
