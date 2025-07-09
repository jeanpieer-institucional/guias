<?php
if (isset($_POST['oracion'])){
    $ora=$_POST['oracion'];
    $nom=$_POST['nombre'];
    $pos=strpos($ora,$nom);
    $sub=strstr($ora, $nom);
    if ($pos==false){
        $res="No esta";
    }else{
        $res="Si esta";
    }
}else{
    $ora="";
    $nom="";
    $res="";
    $pos="";
    $sub="";
}
echo "<form method='post' action='resultado50.php' style='background-color: #cafe00'>
    Oración <input type='text' name=oracion value='$ora'><br>
    Nombre <input type='text' name=nombre value='$nom'><br>
    ================================================================<br>
    Esta ¿?= <input type='text' name='ok' value='$res'><br>
    Posición= <input type='text' name='ok' value='$pos'><br>
    Sub cadena= <input type='text' name='ok' value='$sub'>
</form>";
?>