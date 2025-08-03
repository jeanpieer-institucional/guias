<?php

/* Inicializar un arreglo MES, con los nombres de los meses del año y programar
una página para ingresar el número del mes y evaluar su nombre */

echo "<style>
form{
margin:0 auto;
padding: 1em;
width:250px;
background-color:#add8e6;
border: 1px solid #000000;
border-radius:1em;
}
</style>";
$meses=array("","ENERO","FEBRERO","MARZO", "ABRIL", "MAYO", "JUNIO", "JULIO", "AGOSTO","SEPTIEMBRE","OCTUBRE", "NOVIEMBRE","DICIEMBRE");

$m = isset($_POST['text1']) ? $_POST['text1'] : '';
$nombreMes = '';
if ($m !== '' && is_numeric($m) && $m >= 1 && $m <= 12) {
	$nombreMes = $meses[$m];
} elseif ($m !== '') {
	$nombreMes = "Número de mes inválido";
}
echo "<form name=form1 method=POST>
Numero de Mes : <input type=text name=text1 value=\"$m\" >
<input type=submit name=ok value=Enviar ><br><br>
El nombre del mes es : $nombreMes
</form>";
?>
