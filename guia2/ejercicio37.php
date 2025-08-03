<?php
if(isset($_POST['numero'])){
    $num=$_POST['numero'];
    $suma=0;
    $serie=0;
    $termino = 1;
    $sumarDos = true;
}else{
    $num="";
    $suma=0;
    $serie=0;
    $termino = 1;
    $sumarDos = true;
}
echo "<form method=post style='background-color: lightblue'>
<h2>Mostrar los primeros 'N' terminos de la serie y sumarlos</h2>
Ingrese el número de terminos <input type=number name=numero min=1 value=$num><br>
<input type=submit value=Mostrar>
</form>";
echo "SERIE: ";
for ($i=1; $i <= $num ; $i++){
    $serie=$termino;
    $suma+=$serie;
    if ($sumarDos) {
        $termino += 2;
    } else {
        $termino += 1;
    }
    $sumarDos = !$sumarDos;

    echo " $serie, ";
}
echo "<br>SUMA: $suma ";
?>