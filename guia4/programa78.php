<?php
date_default_timezone_set("America/Lima");
$fecha1 = isset($_POST['fecha1']) ? $_POST['fecha1'] : "";
$fecha2 = isset($_POST['fecha2']) ? $_POST['fecha2'] : "";
$mensaje = "";
echo "<form method='post' style='background-color: #cafe00; padding: 10px;'>
      <h3>Calcular días entre fechas</h3>
      Fecha 1 (dd/mm/aaaa): <input type='text' name='fecha1' value='$fecha1'><br>
      Fecha 2 (dd/mm/aaaa): <input type='text' name='fecha2' value='$fecha2'><br>
      <input type='submit' name='ok' value='Calcular'>
      </form>";
if (isset($_POST['fecha1']) && isset($_POST['fecha2'])) {
    if (preg_match('/^(\d{2})\/(\d{2})\/(\d{4})$/', $fecha1, $matches1) &&
        preg_match('/^(\d{2})\/(\d{2})\/(\d{4})$/', $fecha2, $matches2)) {
        $fechaObj1 = DateTime::createFromFormat('d/m/Y', $fecha1);
        $fechaObj2 = DateTime::createFromFormat('d/m/Y', $fecha2);
        if ($fechaObj1 && $fechaObj2) {
            $diferencia = $fechaObj1->diff($fechaObj2);
            $dias = $diferencia->days;
            $direccion = ($fechaObj1 < $fechaObj2) ? "después" : "antes";
            $mensaje = "Hay $dias días entre $fecha2 y $fecha1";
        } else {
            $mensaje = "Una o ambas fechas son inválidas";
        }
    } else {
        $mensaje = "Formato incorrecto. Use dd/mm/aaaa para ambas fechas";
    }
    
    echo "<div style='margin-top: 10px;'>$mensaje</div>";
}
?>