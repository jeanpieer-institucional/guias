<?php

/* Inicializar un arreglo con 5 distritos y mostrarlos en una página. */

echo "<style>
form{
margin:0 auto;
padding: 1em;
width:100px;
background-color:#add8e6;
border: 1px solid #000000;
border-radius:1em;
}
</style>";
/////////////////////////
echo "<form name=form1 >";
$distritos=array("","Chorrillos","Barranco","Lince","Comas","Ate","Miraflores");
foreach($distritos as $xx){
echo " $xx <br>";
}
echo "</form>"
?>