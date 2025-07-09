<?php
if (isset($_POST['nombre'])){
    $nom=$_POST['nombre'];
    $n=$_POST['numero'];
    $pri=substr($nom,0,$n);
    $ult=substr($nom,-$n,$n);
    $repet=str_repeat($nom,$n);
}else{
    $nom="";
    $n="";
    $pri="";
    $ult="";
    $repet="";
}
echo "<form method='post'    style='background-color: #cafe00'>
    Nombre <input type='text' name=nombre value='$nom'><br>
    Número <input type='text' name=numero value='$n'><br>
    ================================================================<br>
    Primeras letras= <input type='text' name='ok' value='$pri'><br>
    Ultimas letras= <input type='text' name='ok' value='$ult'><br> 
    Repetir nombre= <input type='text' name='ok' value='$repet'>
    </form>";
?>