<?php
// Función para convertir una fecha en formato dd/mm/yyyy a formato documentario
function fechaADocumento($fecha) {
    $meses = [
        1 => "enero", 2 => "febrero", 3 => "marzo", 4 => "abril",
        5 => "mayo", 6 => "junio", 7 => "julio", 8 => "agosto",
        9 => "septiembre", 10 => "octubre", 11 => "noviembre", 12 => "diciembre"
    ];

    $partes = explode("/", $fecha);
    if (count($partes) == 3) {
        $dia = intval($partes[0]);
        $mes = intval($partes[1]);
        $anio = intval($partes[2]);

        if (checkdate($mes, $dia, $anio)) {
            return "$dia de " . $meses[$mes] . " del $anio";
        }
    }

    return "Fecha inválida";
}

// Lectura del dato ingresado
$fecha = isset($_POST['fecha']) ? $_POST['fecha'] : '';

// Mostrar formulario
echo "<form name=form1 method=POST>
Ingrese una fecha (dd/mm/yyyy):<br>
<input type=text name='fecha' value=\"$fecha\"><br>
<input type=submit name=ok value='Enviar'><br>
</form>";

// Procesamiento
if (isset($_POST['ok'])) {
    $resultado = fechaADocumento($fecha);
    echo "Resultado: <b>$resultado</b>";
}
?>
