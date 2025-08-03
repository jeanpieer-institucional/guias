<?php
$n = isset($_POST['text1']) ? intval($_POST['text1']) : 0;
$arreglo = isset($_POST['text']) ? $_POST['text'] : array();

echo "<form name=form1 method=POST>
INGRESE LA CANTIDAD DE NOMBRES:<br>
<input type=text name=text1 value=\"$n\" >
<input type=submit name=ok value=Enviar ><br>";

if ($n > 0) {
	echo "=====================================<br>
Agregar Elementos al Arreglo : <br>";
	for ($k = 1; $k <= $n; $k++) {
		$valor = isset($arreglo[$k]) ? htmlspecialchars($arreglo[$k]) : '';
		echo "<input type=text name=\"text[$k]\" value=\"$valor\" ><br>";
	}
	echo "</form>";
} else {
	echo "</form>";
}

// Programacion
if (!empty($arreglo)) {
	sort($arreglo);
	foreach ($arreglo as $dato) {
		echo "  " . htmlspecialchars($dato) . "  ";
	}
}
?>
