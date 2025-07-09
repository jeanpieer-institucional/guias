<?php
/* Ingresar el número de elementos de un arreglo (“n”), luego visualizar “n” cajas de texto
para ingresar números al arreglo y calcular la suma y el promedio de sus elementos. */

echo "<style>
form{
margin:0 auto;
padding: 1em;
width:250px;
background-color:#cafe00;
border: 1px solid #000000;
border-radius:1em;
}
</style>";
/////////////////////////////////////////
$n = isset($_POST['text1']) ? intval($_POST['text1']) : '';
echo "<form name='form1' method='POST'>
Ingrese la cantidad de elementos:</br>
<input type='text' name='text1' value='" . htmlspecialchars($n) . "' >
<input type='submit' name='ok' value='Enviar' ><br>";

$arreglo = isset($_POST['text']) ? $_POST['text'] : array();

if ($n > 0) {
	echo "=============================<br>
Agregar Elementos al Arreglo: <br>";
	for ($k = 0; $k < $n; $k++) {
		$valor = isset($arreglo[$k]) ? htmlspecialchars($arreglo[$k]) : '';
		echo "$k .<input type='text' name='text[$k]' value='$valor' ><br>";
	}
}
echo "</form>";

/////////////////PROGRAMACION DEL ARREGLO
if (!empty($arreglo) && $n > 0) {
	$sum = 0;
	$count = 0;
	foreach ($arreglo as $dato) {
		if (is_numeric($dato)) {
			$sum += $dato;
			$count++;
		}
	}
	if ($count > 0) {
		$pro = $sum / $count;
		echo "<div style='width:250px;margin:0 auto;padding:1em;background-color:#e0ffe0;border:1px solid #000;border-radius:1em;'>";
		echo "La suma es : $sum <br>";
		echo "EL promedio es : $pro <br>";
		echo "</div>";
	}
}
?>
