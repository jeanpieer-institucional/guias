<?php
date_default_timezone_set("America/Lima");
$fecha=date('z');
$diaRestante=365-$fecha;
echo "<form method=post style='background-color: #cafe00'>
Dias faltantes: <input type=text name=ok value=$diaRestante>
</form>";
?>