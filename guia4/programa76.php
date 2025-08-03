<?php
date_default_timezone_set("America/Lima");
$meses_es = array(
    1 => 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
    'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);
$fechaIngresada = isset($_POST['fecha']) ? $_POST['fecha'] : "";
echo "<form method='post' style='background-color: #cafe00'>
Fecha: <input type='text' name='fecha' value='$fechaIngresada'>
<input type='submit' name='ok' value='Comprobar'>
</form>";
if (isset($_POST['ok'])) {
    if (preg_match('/^(\d{2})\/(\d{2})\/(\d{4})$/', $fechaIngresada, $matches)) {
        $dia = $matches[1];
        $mes = $matches[2];
        $anio = $matches[3];
        
        if (checkdate($mes, $dia, $anio)) {
            $nombreMes = $meses_es[(int)$mes];
            echo "El mes de la fecha ingresada es: $nombreMes";
        } else {
            echo "Fecha incorrecta";
        }
    } else {
        echo "Formato de fecha inválido. Use dd/mm/aaaa";
    }
}
?>