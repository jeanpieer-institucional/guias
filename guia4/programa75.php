<?php
if (isset($_POST['fecha'])){
    $fechaIngresada=$_POST['fecha'];
    $dia=substr($fechaIngresada,0,2);
    $mes=substr($fechaIngresada,3,2);
    $anio=substr($fechaIngresada,6,4);
}else{
    $fechaIngresada=" ";

}
echo "<form method=post style='background-color: #cafe00'>
Ingresa Fecha: <input type=text name=fecha value=$fechaIngresada>
<input type=submit name=ok value=Comprobar>
</form>";
if (isset($_POST['fecha'])){
    if (checkdate($mes,$dia,$anio)){
        echo "Fecha correcta";
    }else{
        echo "Fecha incorrecta";
    }
}
?>