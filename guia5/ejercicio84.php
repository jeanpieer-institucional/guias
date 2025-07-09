<?php
/* Programe una página que permita ingresar el nombre, apellidos,
edad y sexo del socio de un club y genere su código, ABCDEFG, donde AB = 2
primeras letras de su nombre, C = La última letra de su apellido paterno, D = la
ultima letra de su apellido materno, EF = edad, G = 1 si fuera masculino y 0 si
fuera femenino. (Sexo con opciones). */

/* if (isset($_POST['ok'])){
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = $_POST['edad'];
    $sexo = $_POST['sexo'];
    
    // Validar que todos los campos estén completos
    if(!empty($nombre) && !empty($apellidos) && !empty($edad) && $sexo != "Seleccione") {
        // Procesar para generar el código
        
        // AB: Dos primeras letras del nombre (en mayúsculas)
        $ab = strtoupper(substr($nombre, 0, 2));
        
        // Separar apellidos (asumiendo que primero es paterno y luego materno)
        $apellidosArray = explode(" ", $apellidos);
        $apellidoPaterno = $apellidosArray[0] ?? '';
        $apellidoMaterno = $apellidosArray[1] ?? '';
        
        // C: Última letra del apellido paterno (en mayúsculas)
        $c = strtoupper(substr($apellidoPaterno, -1));
        
        // D: Última letra del apellido materno (en mayúsculas)
        $d = strtoupper(substr($apellidoMaterno, -1));
        
        // EF: Edad (formato de 2 dígitos)
        $ef = str_pad($edad, 2, '0', STR_PAD_LEFT);
        
        // G: 1 para masculino, 0 para femenino
        $g = ($sexo == "Masculino") ? "1" : "0";
        
        // Construir el código final
        $codigoGenerado = $ab . $c . $d . $ef . $g;
    } else {
        $codigoGenerado = "Complete todos los campos correctamente";
    }
} else {
    $nombre = "";
    $apellidos = "";
    $edad = "";
    $sexo = "Seleccione";
    $codigoGenerado = "";
}

echo "<form method='post' style='background-color: lightblue; padding: 20px; border-radius: 10px'>
Nombre: <input type='text' name='nombre' value='$nombre'><br><br>
Apellidos: <input type='text' name='apellidos' value='$apellidos'><br><br>
Edad: <input type='number' name='edad' value='$edad'><br><br>
Seleccione su sexo:
<select name='sexo'>
    <option value='Seleccione' ".($sexo=="Seleccione"?"selected":"").">Seleccione</option>
    <option value='Masculino' ".($sexo=="Masculino"?"selected":"").">Masculino</option>
    <option value='Femenino' ".($sexo=="Femenino"?"selected":"").">Femenino</option>
</select><br><br>
<input type='submit' name='ok' value='Generar Código'><br>
---------------------------------------------------------------<br>
Código generado: <input type='text' value='$codigoGenerado' readonly>
</form>"; */

$codigoGenerado = "";

if (isset($_POST['ok'])){
    $nombreCompleto = trim($_POST['nombre']);
    $sexo = $_POST['sexo'];
    $edad = $_POST['edad'];
    
    // Validar que todos los campos estén completos
    if(!empty($nombreCompleto) && $sexo != "Seleccione" && !empty($edad) && is_numeric($edad)){
        // Dividir el nombre completo en partes
        $partesNombre = explode(" ", $nombreCompleto);
        
        // Obtener las 2 primeras letras del nombre (AB)
        $nombre = $partesNombre[0];
        $AB = strtoupper(substr($nombre, 0, 2));
        
        // Obtener última letra del apellido paterno (C)
        $apellidoPaterno = isset($partesNombre[1]) ? $partesNombre[1] : "";
        $C = $apellidoPaterno != "" ? strtoupper(substr($apellidoPaterno, -1)) : "X";
        
        // Obtener última letra del apellido materno (D)
        $apellidoMaterno = isset($partesNombre[2]) ? $partesNombre[2] : "";
        $D = $apellidoMaterno != "" ? strtoupper(substr($apellidoMaterno, -1)) : "X";
        
        // Obtener edad (EF)
        $EF = str_pad($edad, 2, "0", STR_PAD_LEFT);
        
        // Obtener código de sexo (G)
        $G = ($sexo == "Masculino") ? "1" : "0";
        
        // Generar código completo
        $codigoGenerado = $AB . $C . $D . $EF . $G;
    } else {
        $codigoGenerado = "Complete todos los campos correctamente";
    }
} else {
    $nombreCompleto = "";
    $sexo = "Seleccione";
    $edad = "";
}

echo "<form method='post' style='background-color: lightblue; padding: 20px; border-radius: 10px'>
Nombre Completo: <input type='text' name='nombre' value='$nombreCompleto'><br><br>
Edad: <input type='number' name='edad' value='$edad' min='1' max='99'><br><br>
Seleccione su sexo:
<select name='sexo'>
    <option value='Seleccione' ".($sexo=="Seleccione"?"selected":"").">Seleccione</option>
    <option value='Masculino' ".($sexo=="Masculino"?"selected":"").">Masculino</option>
    <option value='Femenino' ".($sexo=="Femenino"?"selected":"").">Femenino</option>
</select><br><br>
<input type='submit' name='ok' value='Generar Código'><br>
---------------------------------------------------------------<br>
Codigo generado: <input type='text' value='$codigoGenerado' readonly style='font-weight: bold;'>
</form>";
?>