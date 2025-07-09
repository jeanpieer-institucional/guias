<?php
/* Crear un formulario y mostrar una página que permita visualizar los distritos, sexo y
estado civil de un cliente y en la misma página mostrar los datos
seleccionados. */

if (isset($_POST['ok'])){
    $distrito = $_POST['distrito'];
    $sexo = $_POST['sexo'];
    $estadoCivil = $_POST['estadoCivil'];
} else {
    $sexo = "Seleccione";
    $distrito = "Seleccione";
    $estadoCivil = "Seleccione";
}

echo "<form method='post' style='background-color: lightblue; padding: 20px; border-radius: 10px'>
<h1> Seleccione las opciones </h1>
<select name='distrito'>
    <option value='Seleccione' ".($distrito==""?"selected":"").">Seleccione</option>
    <option value='Chorrillos' ".($distrito=="Chorrillos"?"selected":"").">Chorrillos</option>
    <option value='Callao' ".($distrito=="Callao"?"selected":"").">Callao</option>
    <option value='Miraflores' ".($distrito=="Miraflores"?"selected":"").">Miraflores</option>
</select><br><br>

<select name='sexo' value='$sexo'>
<option valor='Seleccione' ".($sexo==""?"selected":"").">Seleccione</option>
    <option value='Masculino' ".($sexo=="Masculino"?"selected":"").">Masculino</option>
    <option value='Femenino' ".($sexo=="Femenino"?"selected":"").">Femenino</option>
</select><br><br>

<select name='estadoCivil'>
    <option value='Seleccione' ".($estadoCivil=="Seleccione"?"selected":"").">Seleccione</option>
    <option value='Soltero' ".($estadoCivil=="Soltero"?"selected":"").">Soltero Codiciado</option>
    <option value='Casado' ".($estadoCivil=="Casado"?"selected":"").">Prisionero (Casado)</option>
    <option value='Divorsiado' ".($estadoCivil=="Divorsiado"?"selected":"").">Liberado (Divorsiado)</option>
    <option value='Viudo' ".($estadoCivil=="Viudo"?"selected":"").">Solitario (Viudo)</option>
</select><br><br>
<input type='submit' name='ok' value='Mostrar'><br>
---------------------------------------------------------------<br>
Distrito = <input type=text  value=$distrito readonly><br><br>
Sexo = <input type=text  value=$sexo readonly><br><br>
Estado Civil = <input type=text  value=$estadoCivil readonly><br><br>
</form>";