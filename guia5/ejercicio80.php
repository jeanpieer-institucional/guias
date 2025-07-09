<?php
/* Calcular el Subtotal, IGV(18%), descuento(10%) y total a pagar
según la cantidad ingresada y las alternativas seleccionadas. (si no selecciona
la casilla el valor respectivo será cero.) */
if (isset($_POST['ok'])) {
    $pre = $_POST['precio'];
    $can = $_POST['cantidad'];
    $sub = $pre * $can;
    if(isset($_POST['checkbox1'])) {
        $cbx1=$_POST['checkbox1'];
        $igv=0.18 * $sub;
        $check1 = "checked";
    } else {
        $igv = 0;
        $check1 = "";
    }

    if(isset($_POST['checkbox2'])) {
        $cbx2=$_POST['checkbox2'];
        $des=0.10 * $sub;
        $check2 = "checked";
    } else {
        $des = 0;
        $check2 = "";
    }
    $total = $sub + $igv - $des;
} else {
    $pre = 0;
    $can = 0;
    $sub = 0;
    $igv = 0;
    $des = 0;
    $total = 0;
    $check1 = "";
    $check2 = "";
}

echo "<form method='post' style='background-color: lightblue; padding: 20px; border-radius: 10px'>
PRECIO <input type='number' name='precio' value=$pre><br>
CANTIDAD <input type='number' name='cantidad' value=$can><br>
--------------------------------------------------------------<br>
SUBTOTAL= $sub<br>
<input type='checkbox' name='checkbox1' $check1> IGV(18%)=$igv <br>
<input type='checkbox' name='checkbox2' $check2> Descuento(10%)=$des <br>
---------------------------------------------------------------<br>
TOTAL A PAGAR = $total <br>
<input type='submit' name='ok'>
</form>";