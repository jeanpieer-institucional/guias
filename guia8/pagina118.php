<?php
// Función para convertir número a nombre
function numeroANombre($numero) {
    $unidades = [
        "", "uno", "dos", "tres", "cuatro", "cinco",
        "seis", "siete", "ocho", "nueve"
    ];
    $especiales = [
        10 => "diez", 11 => "once", 12 => "doce", 13 => "trece",
        14 => "catorce", 15 => "quince", 16 => "dieciséis",
        17 => "diecisiete", 18 => "dieciocho", 19 => "diecinueve"
    ];
    $decenas = [
        "", "", "veinte", "treinta", "cuarenta", "cincuenta",
        "sesenta", "setenta", "ochenta", "noventa"
    ];

    if ($numero >= 1 && $numero <= 9) {
        return $unidades[$numero];
    } elseif ($numero >= 10 && $numero <= 19) {
        return $especiales[$numero];
    } elseif ($numero >= 20 && $numero <= 99) {
        $d = intval($numero / 10);
        $u = $numero % 10;
        if ($u == 0) {
            return $decenas[$d];
        } elseif ($d == 2) {
            return "veinti" . $unidades[$u];
        } else {
            return $decenas[$d] . " y " . $unidades[$u];
        }
    } else {
        return "Número fuera de rango";
    }
}

// Lectura del número ingresado
$n = isset($_POST['text1']) ? intval($_POST['text1']) : 0;

// Formulario
echo "<form name=form1 method=POST>
INGRESE UN NÚMERO ENTRE 1 Y 99:<br>
<input type=text name=text1 value=\"$n\">
<input type=submit name=ok value=Enviar><br>
</form>";

// Procesamiento
if ($n > 0 && $n <= 99) {
    $nombre = numeroANombre($n);
    echo "El número ingresado es: <b>$n</b><br>";
    echo "Nombre: <b>$nombre</b>";
} elseif ($n != 0) {
    echo "Por favor ingrese un número válido entre 1 y 99.";
}
?>
