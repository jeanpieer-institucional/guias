<?php
date_default_timezone_set("America/Lima");
$fecha=date('z');
echo "<form method=post style='background-color: #cafe00'>
Dias transcurridos: <input type=text name=ok value=$fecha>
</form>";
?>