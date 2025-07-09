<?php
/* Crea un formulario para calcular el total a pagar, el descuento del 10% si es al contado y el
interés de 5% si es al crédito. Calculando el descuento y al contado con radioButton*/

if (isset($_POST['ok'])) {
    $pre = $_POST['precio'];
    $can = $_POST['cantidad'];
    $sub = $pre * $can;

    if (isset($_POST['tipo_pago'])){
        $radio=$_POST['tipo_pago'];
    }
    if($radio==1){
        $des=0.10*$sub;
        $int = 0;
        $contado_checked = "checked";
        $credito_checked = "";
    }else{
        if($radio==2){
        $int=0.05*$sub;
        $des = 0;
        $contado_checked = "";
        $credito_checked = "checked";
        }else{
            $des=0;
            $int=0;
            $contado_checked="";
            $credito_checked="";
        }
    }
    $total = $sub - $des + $int;
} else {
    $pre = 0;
    $can = 0;
    $sub = 0;
    $des = 0;
    $int = 0;
    $total = 0;
    $credito_checked = "";
    $contado_checked = "";
}

echo "<form method='post' style='background-color: lightblue; padding: 20px; border-radius: 10px'>
PRECIO <input type='number' name='precio' value=$pre><br>
CANTIDAD <input type='number' name='cantidad' value=$can><br>
<input type='radio' name='tipo_pago' value='1' $contado_checked> Contado (10%)
<input type='radio' name='tipo_pago' value='2' $credito_checked> Crédito (5%)<br>
---------------------------------------------------------------<br>
SUBTOTAL= $sub<br>
Descuento(10%)= $des<br>
Interés(5%)= $int<br>
----------------------------------------------------------------<br>
TOTAL A PAGAR = $total <br>
<input type='submit' name='ok' value='Calcular'>
</form>";