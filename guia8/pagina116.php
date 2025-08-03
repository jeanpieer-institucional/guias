<?php
$n = isset($_POST['text1']) ? intval($_POST['text1']) : '';
echo "<form name=form1 method=POST>
INGRESE LA CANTIDAD DE NUMEROS:<br>
<input type=text name=text1 value=\"$n\" >
<input type=submit name=ok value=Enviar ><br>";
if($n > 0){
	echo "=====================================<br>
	Agregar Elementos al Arreglo : <br>";
	$arreglo = isset($_POST['text']) ? $_POST['text'] : array();
	for($k = 1; $k <= $n; $k++){
		$valor = isset($arreglo[$k]) ? htmlspecialchars($arreglo[$k]) : '';
		echo "<input type=text name=\"text[$k]\" value=\"$valor\" ><br>";
	}
	echo "<input type=submit name=ok2 value='Calcular Moda'><br>";
}
echo "</form>";
//////Programacion
if(isset($arreglo) && is_array($arreglo) && count($arreglo) > 0 && isset($_POST['ok2'])){
	$cuenta = array_count_values($arreglo);
	arsort($cuenta);
	$moda = key($cuenta);

	echo "El más repetido = $moda  <br>";
}
?>