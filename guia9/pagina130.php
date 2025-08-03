<?php
// Función principal que convierte un número (hasta 999999) en letras
function numeroEnLetras($num) {
    if (!is_numeric($num) || $num < 1 || $num > 999999) {
        return "Número fuera de rango";
    }

    $unidades = ['', 'uno', 'dos', 'tres', 'cuatro', 'cinco', 'seis', 'siete', 'ocho', 'nueve'];
    $especiales = [10 => 'diez', 11 => 'once', 12 => 'doce', 13 => 'trece', 14 => 'catorce', 15 => 'quince',
                   16 => 'dieciséis', 17 => 'diecisiete', 18 => 'dieciocho', 19 => 'diecinueve'];
    $decenas = ['', '', 'veinte', 'treinta', 'cuarenta', 'cincuenta',
                'sesenta', 'setenta', 'ochenta', 'noventa'];
    $centenas = ['', 'ciento', 'doscientos', 'trescientos', 'cuatrocientos',
                 'quinientos', 'seiscientos', 'setecientos', 'ochocientos', 'novecientos'];

    // Función para convertir hasta 3 cifras
    function convertirTres($n) {
        global $unidades, $decenas, $centenas, $especiales;

        $n = str_pad($n, 3, '0', STR_PAD_LEFT);
        $c = intval($n[0]); // centenas
        $d = intval($n[1]); // decenas
        $u = intval($n[2]); // unidades
        $texto = '';

        if ($n === '000') return '';

        if ($n === '100') return 'cien';

        if ($c > 0) {
            $texto .= $centenas[$c] . ' ';
        }

        if ($d == 1) {
            $texto .= $especiales[$d * 10 + $u];
        } elseif ($d == 2) {
            if ($u == 0) {
                $texto .= 'veinte';
            } else {
                $texto .= 'veinti' . $unidades[$u];
            }
        } elseif ($d > 2) {
            $texto .= $decenas[$d];
            if ($u > 0) {
                $texto .= ' y ' . $unidades[$u];
            }
        } elseif ($u > 0) {
            $texto .= $unidades[$u];
        }

        return trim($texto);
    }

    // Separar en miles y unidades
    $num = str_pad($num, 6, '0', STR_PAD_LEFT);
    $mil = substr($num, 0, 3);
    $uni = substr($num, 3, 3);

    $texto = '';

    if (intval($mil) > 0) {
        if ($mil === '001') {
            $texto .= 'mil ';
        } else {
            $texto .= convertirTres($mil) . ' mil ';
        }
    }

    if (intval($uni) > 0) {
        $texto .= convertirTres($uni);
    }

    return trim($texto);
}

// Leer número ingresado
$numero = isset($_POST['numero']) ? $_POST['numero'] : '';

// Mostrar formulario
echo "<form name=form1 method=POST>
Ingrese un número del 1 al 999999:<br>
<input type=text name='numero' value=\"$numero\"><br>
<input type=submit name=ok value='Convertir'><br>
</form>";

// Procesamiento
if (isset($_POST['ok']) && $numero !== '') {
    $nombre = numeroEnLetras($numero);
    echo "Resultado: <b>$nombre</b>";
}
?>
