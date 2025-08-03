<?php
if (isset($_POST['oracion'])){
    $ora=$_POST['oracion'];
    $invertido=strrev($ora);
    $primera=ucfirst($ora);
    $cadaPalabra=ucwords($ora);
}else{
    $ora="";
    $invertido="";
    $primera="";
    $cadaPalabra="";
}

echo "<form method='post' action='resultado50.php' style='background-color: #cafe00'>
    ingrese una oración <input type='text' name=oracion value='$ora'><br>
    ================================================================<br>
    Invertido= <input type='text' name='ok' value='$invertido'><br>
    Primera en mayuscula= <input type='text' name='ok' value='$primera'><br>
    Primera de cada palabra= <input type='text' name='ok' value='$cadaPalabra'>
</form>";
?>