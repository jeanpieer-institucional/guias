<?php
// Procesar formulario solo si se hizo clic en el botón Enviar
    $codigo = '';
    $nombre = '';
    $apellido = '';
    $sBase = 0;
    $sBruto = 0;
    $afp = 0;
    $sNeto = 0;
    $check1 = "";
    $check2 = "";
    $check3 = "";
    $check4 = "";
    $check5 = "";
    $check6 = "";
    $check7 = "";
    $check8 = "";
    $check9 = "";
if (isset($_POST['ok'])) {
    $codigo = isset($_POST['codigo']) ? $_POST['codigo'] : '';
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : '';
    $radio1 = isset($_POST['radio1']) ? $_POST['radio1'] : null;
    $radio2 = isset($_POST['radio2']) ? $_POST['radio2'] : null;

    switch($radio1){
        case 1: $sBase=2500; $check1="checked"; break;
        case 2: $sBase=2500; $check2="checked"; break;
        case 3: $sBase=2000; $check3="checked"; break;
        case 4: $sBase=3000; $check4="checked"; break;
        default: echo "SELECCIONE UN DEPARTAMENTO <br>";
    }
    switch($radio2){
        case 1: $sBruto=1.00*$sBase; $check5="checked"; break;
        case 2: $sBruto=0.90*$sBase; $check6="checked"; break;
        case 3: $sBruto=0.50*$sBase; $check7="checked"; break;
        case 4: $sBruto=0.40*$sBase; $check8="checked"; break;
        case 5: $sBruto=0.25*$sBase; $check9="checked"; break;
        default: echo " SELECCIONE UN CARGO";
    }
    $afp = 0.118 * $sBruto;
    $sNeto = $sBruto - $afp;

}else {
    // Inicializar variables
    $codigo = '';
    $nombre = '';
    $apellido = '';
    $sBase = 0;
    $sBruto = 0;
    $afp = 0;
    $sNeto = 0;
    $check1 = "";
    $check2 = "";
    $check3 = "";
    $check4 = "";
    $check5 = "";
    $check6 = "";
    $check7 = "";
    $check8 = "";
    $check9 = "";
}

echo "<form name='form1' method='POST' style='background-color:lightblue; padding: 30px; border-radius: 20px; margin: 3rem' >
<h2>CALCULAR SUELDO DE EMPLEADO</h2>
<h3>Ingrese los datos del empleado y seleccione el departamento y cargo</h3>
<p>CODIGO:<input type='text' name='codigo' value='$codigo'></p>
<p>NOMBRE:<input type='text' name='nombre' value='$nombre'></p>
<p>APELLIDO:<input type='text' name='apellido' value='$apellido'></p>
<fieldset>
<legend>DEPARTAMENTO</legend>
<input type='radio' name='radio1' value='1' $check1>CONTABILIDAD
<input type='radio' name='radio1' value='2' $check2>VENTAS
<input type='radio' name='radio1' value='3' $check3>ALMACEN
<input type='radio' name='radio1' value='4' $check4>GERENCIA
</fieldset>
<fieldset>
<legend>CARGO</legend>
<input type='radio' name='radio2' value='1' $check5 >GERENTE
<input type='radio' name='radio2' value='2' $check6 >SUBGERENTE
<input type='radio' name='radio2' value='3' $check7 >ASISTENTE
<input type='radio' name='radio2' value='4' $check8 >EMPLEADO
<input type='radio' name='radio2' value='5' $check9 >MANTENIMIENTO
</fieldset><br>
<input type='submit' name='ok' value='Enviar' >
</form>";

// Mostrar resultados solo si el formulario fue enviado y los valores son válidos
if (isset($_POST['ok'])) {
    echo "SUELDO BASE ........: $sBase<br>";
    echo "SUELDO BRUTO ......: $sBruto<br>";
    echo "DESCUENTO(afp) ......: $afp<br>";
    echo "===========================<br>";
    echo "SUELDO NETO ......: $sNeto<br>";
}
?>
