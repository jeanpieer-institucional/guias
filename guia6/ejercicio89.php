<?php
/* Diseñe y programe una página que permita ingresar un número y
mostrar el nombre de cada uno de sus dígitos. */
if (isset($_POST['ok'])) {
    $text1 = $_POST['text1'];
    $cad = "";
} else {
    $text1 = "";
    $cad = "";
}

echo "<form name='form1' method='POST' style='background-color:#CAFE00;' >
DIGITO :<input type='text' name='text1' value='$text1' ><br>
<input type='submit' name='ok' value='Enviar' >
</form>";
$n = strlen($text1);
for ($k = 0; $k < $n; $k++) {
    $dig = substr($text1, $k, 1);
    switch ($dig) {
        case "0": $cad .= " Cero "; break;
        case "1": $cad .= " Uno "; break;
        case "2": $cad .= " Dos "; break;
        case "3": $cad .= " Tres "; break;
        case "4": $cad .= " Cuatro "; break;
        case "5": $cad .= " Cinco "; break;
        case "6": $cad .= " Seis "; break;
        case "7": $cad .= " Siete "; break;
        case "8": $cad .= " Ocho "; break;
        case "9": $cad .= " Nueve "; break;
        default: $cad .= " x "; break;
    }
}
echo $cad;
?>
