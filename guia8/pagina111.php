<?php
////Lectura e inicio de datos
$getDistritos = $_POST['casilla'] ?? []; // para evitar warning si no se ha enviado el formulario
$distritos = array("Ate", "Barranco", "Chorrillos", "Los Olivos", "Comas", "San Juan", "Lince");

////Formulario
echo "<form name='form1' method='POST'>";
foreach($distritos as $k => $dis){
    echo "<input type='checkbox' name='casilla[$k]' value='$dis'>$dis<br>";
}
echo "<input type='submit' name='ok' value='Enviar'>";
echo "</form><br>";

////Programación
if (!empty($getDistritos)) {
    echo "Distritos seleccionados:<br>";
    foreach($getDistritos as $xdis){
        echo "$xdis<br>";
    }
}
?>
