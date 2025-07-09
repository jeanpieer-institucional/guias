<?php

/* Ingresar 5 nombres a un arreglo mediante 5 cajas de texto y luego mostrar los 5 nombres
concatenados por el símbolo “&”.  */


echo "<style>
form{
margin:0 auto;
padding: 1em;
width:200px;
background-color:#add8e6;
border: 1px solid #000000;k
border-radius:1em;
}
</style>";
/////////////////////////
//leer el arreglo
$arreglo = isset($_POST['text']) ? $_POST['text'] : array_fill(1, 5, '');
//ingreso nombres
echo "<form name='form1' method='POST'>";
for($k=1; $k<=5; $k++){
	$valor = htmlspecialchars($arreglo[$k], ENT_QUOTES, 'UTF-8');
	echo "<input type='text' name='text[$k]' value='$valor' ><br>";
}
echo "<input type='submit' name='ok' value='Enviar' >";
echo "</form>";
//visualizar los nombres
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty(array_filter($arreglo))) {
	$nombres = array_filter($arreglo, function($v) { return trim($v) !== ''; });
	echo implode(' & ', $nombres);
}
?>
