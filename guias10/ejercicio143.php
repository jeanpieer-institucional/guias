<?php
echo "<form name='form1' method='post'>";
if (isset($_POST['imagenes'])) {
    $img = "casa.png"; 
    echo "<p>Imagen en tamaño pequeño (100px):<br>";
    echo "<img src='$img' width='100'><br><br>";

    echo "Imagen en tamaño mediano (200px):<br>";
    echo "<img src='$img' width='200'><br><br>";

    echo "Imagen en tamaño grande (300px):<br>";
    echo "<img src='$img' width='300'><br><br>";
}
echo "<input type='submit' name='imagenes' value='Mostrar Imagen'>";
echo "</form>";
?>
