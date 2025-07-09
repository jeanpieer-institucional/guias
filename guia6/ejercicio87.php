<?php
/* Diseñe y programe una página que permita ingresar un número y mostrar
l día de la semana correspondiente */
if (isset($_POST['ok'])) {
    $text1 = $_POST['text1'];
} else {
    $text1 = "";    
}
echo"<form name=form1 method=POST style='background-color:CAFE00' >
NUMERO DEL DIA:<input type=text name=text1 value=$text1 ><br>
<input type=submit name=ok value=Enviar >
</form>";
switch($text1){
case 1: $cad="Lunes";break;
case 2: $cad="Martes";break;
case 3: $cad="Miercoles";break;
case 4: $cad="Jueves";break;
case 5: $cad="Viernes";break;
case 6: $cad="Sabado";break;
case 7: $cad="Domingo";break;
default: $cad="Ingrese Numero del dia del 1 a 7";
}
echo $cad;
?>
