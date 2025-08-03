<?php
$ca=0;$ce=0;$ci=0;$co=0;$cu=0;
if (isset($_POST['nombre'])){
    $nom=$_POST['nombre'];
    $n=strlen($nom);
    for($k=0;$k<$n;$k++){
        $let=substr($nom,$k,1);
        if($let=='a') $ca++;
        if($let=='e') $ce++;
        if($let=='i') $ci++;
        if($let=='o') $co++;
        if($let=='u') $cu++;
    }
}else{
    $nom="";
    $n=0;
}
echo "<form method='post'    style='background-color: #cafe00'>
    Nombre <input type='text' name=nombre value='$nom'><br>
    ================================================================<br>
    Cantidad de 'A'= <input type='text' name='ok' value='$ca'><br>
    Cantidad de 'E'= <input type='text' name='ok' value='$ce'><br>
    Cantidad de 'I'= <input type='text' name='ok' value='$ci'><br>
    Cantidad de 'O'= <input type='text' name='ok' value='$co'><br>
    Cantidad de 'U'= <input type='text' name='ok' value='$cu'><br>
    </form>";
?>