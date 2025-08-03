<?php
date_default_timezone_set("America/Lima");
$fecha = isset($_POST['fecha']) ? $_POST['fecha'] : "";
$dias = isset($_POST['dias']) ? $_POST['dias'] : "";
$mensaje = "";
echo "<form method='post' style='background-color: #cafe00; padding: 10px;'>
      <h3>Sumar días a una fecha</h3>
      Fecha (dd/mm/aaaa): <input type='text' name='fecha' value='$fecha'><br>
      Días a sumar: <input type='number' name='dias' value='$dias'><br>
      <input type='submit' name='ok' value='Calcular'>
      </form>";
if (isset($_POST['fecha']) && isset($_POST['dias'])) {
    // Validar formato de fecha
    if (preg_match('/^(\d{2})\/(\d{2})\/(\d{4})$/', $fecha, $matches)) {
        $fechaObj = DateTime::createFromFormat('d/m/Y', $fecha);   
        if ($fechaObj && is_numeric($dias)) {
            // Sumar los días
            $fechaObj->add(new DateInterval("P{$dias}D"));
            $nuevaFecha = $fechaObj->format('d/m/Y');
            
            $mensaje = "La fecha es: $nuevaFecha";
        } else {
            $mensaje = "Fecha inválida o días no numéricos";
        }
    } else {
        $mensaje = "Formato de fecha incorrecto. Use dd/mm/aaaa";
    }    
    echo "<div style='margin-top: 10px;'>$mensaje</div>";
}
?>