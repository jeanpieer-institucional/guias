<?php
if (isset($_POST['oracion'])){
    $ora=$_POST['oracion'];
    $longitud=strlen($ora);
    $mayusculas=strtolower($ora);
    $minusculas=strtoupper($ora);
}else{
    $ora="";
    $longitud="";
    $mayusculas="";
    $minusculas="";
}
echo "<form method='post' action='resultado50.php' style='background-color: #cafe00'>
    ingrese una oración <input type='text' name=oracion value='$ora'><br>
    ================================================================<br>
    Longitud= <input type='text' name='ok' value='$longitud'><br>
    Mayusculas= <input type='text' name='ok' value='$mayusculas'><br>
    Minusculas= <input type='text' name='ok' value='$minusculas'>
</form>";
?>