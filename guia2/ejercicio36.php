<?php
if(isset($_POST['numero'])){
    $num=$_POST['numero'];
    $suma=0;
    $serie=0;
}else{
    $num="";
    $suma=0;
    $serie=0;
}
echo "<form method=post style='background-color: lightblue'>
<h2>Mostrar los primeros 'N' terminos de la serie y sumarlos / Multiplo de 5</h2>
Ingrese el número de terminos <input type=number name=numero value=$num><br>
<input type=submit value=Mostrar>
</form>";
echo "Serie: ";
for ($i=1;$i<=$num;$i++) {
    $serie= 5 * $i;
    $suma+=$serie;
    echo " $serie, ";
}
echo "<br>Suma: $suma";
?>