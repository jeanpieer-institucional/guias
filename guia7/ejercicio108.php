<?php
// Inicializar un arreglo DIAS, con los días de la semana (Domingo, Lunes, Martes...) y
// programar una página para ingresar el número del día de la semana y evaluar su nombre

echo "<style>
form{
margin:0 auto;
padding: 1em;
width:250px;
background-color:#add8e6;
border: 1px solid #000000;
border-radius:1em;
}
input[type='text'], input[type='number']{
padding:5px;
width:60px;
margin-bottom:10px;
}
input[type='submit']{
padding:6px 16px;
background:#007bff;
color:#fff;
border:none;
border-radius:4px;
cursor:pointer;
}
</style>";

$dias = array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado");

$n = isset($_POST['text1']) ? $_POST['text1'] : '';
$nombreDia = '';
if ($n !== '' && is_numeric($n) && $n >= 0 && $n <= 6) {
    $nombreDia = $dias[$n];
} elseif ($n !== '') {
    $nombreDia = "Número de día inválido";
}

echo "<form name=form1 method=POST>
Número de Día : <input type=text name=text1 value=\"$n\" >
<input type=submit name=ok value=Enviar ><br><br>
El nombre del día es : $nombreDia
</form>";
?>