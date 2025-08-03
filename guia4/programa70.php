<?php
date_default_timezone_set("America/Lima");//Zona horaria de Peru
$fecha=date('d/m/y');
echo "<form method=post style='background-color: #cafe00'>
Fecha de hoy: <input type=text name=ok value=$fecha>
</form>";
?>