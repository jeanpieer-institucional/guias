<?php

/* Ingresar el número de elementos de un arreglo (“n”), luego visualizar “n” cajas de texto para
ingresar números al arreglo y calcular el mayor y el menor de sus elementos. */
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
$n = isset($_POST['text1']) ? intval($_POST['text1']) : 0;
$arreglo = isset($_POST['text']) ? $_POST['text'] : array();

echo "<form name='form1' method='POST'>
Ingrese la cantidad de elementos:</br>
<input type='text' name='text1' value='" . htmlspecialchars($n) . "' >
<input type='submit' name='ok' value='Enviar' ><br>";

if ($n > 0) {
	echo "=============================<br>
Agregar Elementos al Arreglo: <br>";
	for ($k = 0; $k < $n; $k++) {
		$valor = isset($arreglo[$k]) ? htmlspecialchars($arreglo[$k]) : '';
		echo "$k .<input type='text' name='text[$k]' value='$valor' ><br>";
	}
}
echo "<input type='submit' name='calcular' value='Calcular Mayor y Menor'><br>";
echo "</form>";

// PROGRAMACION DEL ARREGLO
if (!empty($arreglo) && isset($_POST['calcular'])) {
	$may = $arreglo[0];
	$men = $arreglo[0];
	foreach ($arreglo as $dato) {
		if ($dato > $may) $may = $dato;
		if ($dato < $men) $men = $dato;
	}
	echo "<form name='form2'>";
	echo "El Mayor es : $may <br>";
	echo "El Menor es : $men <br>";
	echo "</form>";
}
?>
