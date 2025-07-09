<?php

/* Inicializar un arreglo con los nombres de los DIGITOS
(Cero, Uno, Dos, Tres,….Nueve) y programar una página para ingresar
un dígito y mostrar su nombre */

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

$digitos = array("Cero", "Uno", "Dos", "Tres", "Cuatro", "Cinco", "Seis", "Siete", "Ocho", "Nueve");

$d = isset($_POST['text1']) ? $_POST['text1'] : '';
$nombreDigito = '';
if ($d !== '' && is_numeric($d) && $d >= 0 && $d <= 9) {
    $nombreDigito = $digitos[$d];
} elseif ($d !== '') {
    $nombreDigito = "Dígito inválido";
}

echo "<form name=form1 method=POST>
Ingrese un dígito : <input type=text name=text1 value=\"$d\" >
<input type=submit name=ok value=Enviar ><br><br>
El nombre del dígito es : $nombreDigito
</form>";
?>