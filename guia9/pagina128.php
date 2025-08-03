<?php
// Función que genera un mensaje en una caja de alerta (JavaScript)
function mostrarMensaje($dato) {
    $datoSeguro = htmlspecialchars($dato, ENT_QUOTES);
    echo "<script>alert('$datoSeguro');</script>";
}

// Lectura del dato ingresado
$dato = isset($_POST['dato']) ? $_POST['dato'] : '';

// Formulario
echo "<form name=form1 method=POST>
Ingrese un dato:<br>
<input type=text name='dato' value=\"$dato\"><br>
<input type=submit name=ok value='Mostrar'><br>
</form>";

// Procesamiento
if (isset($_POST['ok']) && $dato !== '') {
    mostrarMensaje($dato);
}
?>
