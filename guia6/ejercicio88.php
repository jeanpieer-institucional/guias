<?php
/* Diseñe y programe una página que permita ingresar un dígito y mostrar su nombre  */

if (isset($_POST['ok'])) {
    $text1 = $_POST['text1'];
} else {
    $text1 = "";    
}
echo"<form name=form1 method=POST style='background-color:lightblue; padding: 10px; border-radius: 20px; margin:3rem'>
DIGITO :<input type=text name=text1 value=$text1 ><br>
<input type=submit name=ok value=Enviar >
</form>";
switch($text1){
    case 0: $cad="Cero";break;
    case 1: $cad="Uno";break;
    case 2: $cad="Dos";break;
    case 3: $cad="Tres";break;
    case 4: $cad="Cuatro";break;
    case 5: $cad="Cinco";break;
    case 6: $cad="Seis";break;
    case 7: $cad="Siete";break;
    case 8: $cad="Ocho";break;
    case 9: $cad="Nueve";break;
    default: $cad="Ingrese un dígito del 0 al 9";
}
echo $cad;
?>