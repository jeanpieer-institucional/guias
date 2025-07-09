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
$dia= date('l');
$nom_semana_es=$dias_semana_es[$dia];
echo "<form method=post style='background-color: #cafe00'>
Nombre del dia de semana: <input type=text name=ok value=$nom_semana_es>
</form>";
?>