<?php
date_default_timezone_set("America/Lima");//Zona horaria de Peru
$fecha=date('d/m/y');
echo "<form method=post style='background-color: #cafe00'>
Fecha de hoy: <input type=text name=ok value=$fecha>
</form>";
date_default_timezone_set("America/Santiago");//Zona horaria de Santiago
$dia=date('h:i:s');
echo "<form method=post style='background-color: #cafe00'>
Hora de Santiago: <input type=text name=ok value=$dia>
</form>";
date_default_timezone_set("America/Argentina/Buenos_Aires");//Zona horaria de Buenos Aires
$dia=date('h:i:s');
echo "<form method=post style='background-color: #cafe00'>
Hora de Buenos Aires: <input type=text name=ok value=$dia>
</form>";
date_default_timezone_set("Europe/Madrid");//Zona horaria de Madrid
$dia=date('h:i:s');
echo "<form method=post style='background-color: #cafe00'>
Hora de Madrid: <input type=text name=ok value=$dia>
</form>";
date_default_timezone_set("Europe/Rome");//Zona horaria de Roma
$dia=date('h:i:s');
echo "<form method=post style='background-color: #cafe00'>
Hora de Roma: <input type=text name=ok value=$dia>
</form>";
?>