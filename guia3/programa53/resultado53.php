<?php
if (isset($_POST['oracion'])){
    $ora=$_POST['oracion'];
    $bus=$_POST['busca'];
    $reem=$_POST['reemplaza'];

    $xpos=strpos($ora,$bus);
    if($xpos===false){
        $res="La primera palabra debe de estar contenida en la oración";
    }else{
        $res=str_replace($bus,$reem,$ora);
    }
}else{
    $ora="";
    $bus="";
    $reem="";
}
echo "<form method='post'    style='background-color: #cafe00'>
    Oración <input type='text' name=oracion value='$ora'><br>
    Busca <input type='text' name=busca value='$bus'><br>
    Reemplaza <input type='text' name=reemplaza value='$reem'><br>
    ================================================================<br>
    Esta ¿?= <input type='text' name='ok' value='$res'>
</form>";
?>