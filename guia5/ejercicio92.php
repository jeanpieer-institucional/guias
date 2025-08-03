<?php
/* Diseñe y programe una página que permita ingresar un tipo de trabajador y
mostrar su sueldo.
Obrero 700
Empleado 800
Gerente 1000
Vendedor 900
*/

if (isset($_POST['ok'])){
$trabajador = $_POST['trabajador'];
}else{
$trabajador = "Seleccione";
}


echo "<form method='post' style='background-color: lightblue; padding: 20px; border-radius: 10px'>
Seleccione el tipo de trabajador:<br><br>
<select name='trabajador' value='$trabajador'>
    <option value='Seleccione'>Seleccione un tipo de trabajador</option>
    <option value='700'>Obrero</option>
    <option value='800'>Empleado</option>
    <option value='1000'>Gerente</option>
    <option value='900'>Vendedor</option>
    <select name='trabajador'><br><br>
<input type='submit' name='ok' value='Calcular Sueldo'><br><br>
Sueldo: <input type='text' name='sueldo' value=$trabajador readonly>
</form>";

