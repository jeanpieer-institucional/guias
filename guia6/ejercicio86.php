<?php
/* Diseñe y programe una página que permita ingresar un número y mostrar el nombre
del mes correspondiente. */
if (isset($_POST['ok'])) {
    $text1 = isset($_POST['text1']) ? $_POST['text1'] : 0;
} else {
    $text1 = "";    
}

echo"<form name=form1 method=POST style='background-color:CAFE00' >
NUMERO DE MES:<input type=text name=text1 value=$text1 ><br>
<input type=submit name=ok value=Enviar >
</form>";
switch($text1){
    case 1: $cad="Enero";break;
    case 2: $cad="Febrero";break;
    case 3: $cad="Marzo";break;
    case 4: $cad="Abril";break;
    case 5: $cad="Mayo";break;
    case 6: $cad="Junio";break;
    case 7: $cad="Julio";break;
    case 8: $cad="Agosto";break;
    case 9: $cad="Septiembre";break;
    case 10: $cad="Octubre";break;
    case 11: $cad="Noviembre";break;
    case 12: $cad="Diciembre";break;
    default: $cad="Ingrese Numero de mes del 1 al 12";
}
echo $cad;
?>