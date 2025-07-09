<?php
date_default_timezone_set("America/Lima");
$dias_semana_es = array(
    "Monday" => "Lunes",
    "Tuesday" => "Martes",
    "Wednesday" => "Miércoles",
    "Thursday" => "Jueves",
    "Friday" => "Viernes",
    "Saturday" => "Sábado",
    "Sunday" => "Domingo"
);
$fechaIngresada = isset($_POST['fecha']) ? $_POST['fecha'] : "";
echo "<form method='post' style='background-color: #cafeee'>
Fecha: <input type='text' name='fecha' value='$fechaIngresada'>
<input type='submit' name='ok' value='Ver día'>
</form>";
if (isset($_POST['ok'])) {
    if (preg_match('/^(\d{2})\/(\d{2})\/(\d{4})$/', $fechaIngresada, $matches)) {
        $dia = $matches[1];
        $mes = $matches[2];
        $anio = $matches[3];
        
        if (checkdate($mes, $dia, $anio)) {
            $fechaObj = DateTime::createFromFormat('d/m/Y', $fechaIngresada);
            $nombreDiaIngles = $fechaObj->format('l');
            $nombreDiaEspanol = $dias_semana_es[$nombreDiaIngles];
            echo "El día de la semana es: $nombreDiaEspanol";
        } else {
            echo "Fecha incorrecta";
        }
    } else {
        echo "Formato inválido. Use dd/mm/aaaa";
    }
}
?>