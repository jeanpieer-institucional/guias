<?php
/**PROBLEMA 2:
Diseñar y programar una página que permita
ingresar el precio y la cantidad de un producto
y calcular el importe total, un descuento del
10% y el monto total a pagar.
 */

 if (isset($_POST['precioProducto'])){
    $precioProducto=$_POST['precioProducto'];
    $cantidadProducto=$_POST['cantidadProducto'];
}else{
    $precioProducto=0;
    $cantidadProducto=0;
}

echo "<form method=POST>
<h1>Verifica Monto a Pagar</h1>
Cantidad: <input type=number name=cantidadProducto valor=$cantidadProducto><br>
Precio Unitario: <input type=text name=precioProducto valor=$precioProducto><br>
<input type=submit name=verifica value=Verificar>
</form>";

if (isset($_POST['precioProducto'])){
    $importe=$cantidadProducto*$precioProducto;
    $descuentoProducto=(10*$importe)/100;
    $total=$importe-$descuentoProducto;
    echo "=============================<br>";
    echo "Importe: ".number_format($importe,2)."<br>";
    echo "Descuento: ".number_format( $descuentoProducto,2)."<br>";
    echo "Monto total a Pagar: ".number_format($total, 2)."<br>";
}
?>