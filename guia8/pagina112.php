<?php
$getAlumnos = isset($_POST['casilla']) ? $_POST['casilla'] : array();
$alumnos = array("Juan Perez", "Luis Roca", "Ana Palomino", "Maria Medoza", "Pedro Palacios", "Beatriz Rojas", "Raul Gomez");
////Formulario
echo "<form name=form1 method=POST >";
$k = 0;
foreach ($alumnos as $alu) {
	echo "<input type=checkbox name=casilla[$k] value='$alu'>$alu<br>";
	$k++;
}
echo "<input type=submit name=ok value=Enviar>";
echo "</form><br>";
////Programacion
echo "Alumnos seleccionados:<br>";
if (!empty($getAlumnos)) {
	$k = 1;
	foreach ($getAlumnos as $xalu) {
		echo "$k. $xalu<br>";
		$k = $k + 1;
	}
}
?>
