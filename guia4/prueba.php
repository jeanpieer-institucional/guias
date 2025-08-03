<?php
date_default_timezone_set("America/Lima");

// Configurar el locale en español
setlocale(LC_TIME, 'es_ES.UTF-8', 'spa', 'es_ES', 'es');

$fechaIngresada = isset($_POST['fecha']) ? $_POST['fecha'] : "";

echo "<form method='post' style='background-color: #cafeee'>
Fecha (dd/mm/aaaa): <input type='text' name='fecha' value='$fechaIngresada'>
<input type='submit' name='ok' value='Ver día'>
</form>";

if (isset($_POST['ok'])) {
    if (preg_match('/^(\d{2})\/(\d{2})\/(\d{4})$/', $fechaIngresada, $matches)) {
        $dia = $matches[1];
        $mes = $matches[2];
        $anio = $matches[3];
        
        if (checkdate($mes, $dia, $anio)) {
            $fechaObj = DateTime::createFromFormat('d/m/Y', $fechaIngresada);
            
            // Opción 1: Usando IntlDateFormatter (recomendado)
            if (class_exists('IntlDateFormatter')) {
                $formatter = new IntlDateFormatter(
                    'es_ES',
                    IntlDateFormatter::FULL,
                    IntlDateFormatter::NONE,
                    'America/Lima',
                    IntlDateFormatter::GREGORIAN,
                    'EEEE' // Formato para el nombre completo del día
                );
                $nombreDia = $formatter->format($fechaObj);
                echo "El día de la semana es: " . ucfirst($nombreDia);
            } 
            // Opción 2: Usando strftime (alternativa si no tienes la extensión Intl)
            else {
                $nombreDia = strftime('%A', $fechaObj->getTimestamp());
                echo "El día de la semana es: " . ucfirst($nombreDia);
            }
        } else {
            echo "Fecha incorrecta";
        }
    } else {
        echo "Formato inválido. Use dd/mm/aaaa";
    }
}
?>