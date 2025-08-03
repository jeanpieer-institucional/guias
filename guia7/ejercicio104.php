<?php

/* Ingresar el número de elementos de un arreglo (“n”), luego visualizar “n” cajas de texto
para ingresar elementos numéricos al arreglo y ordenarlos en forma ascendente */

echo "<style>
form{
margin:0 auto;
padding: 1em;
width:250px;
background-color:#add8e6;
border: 1px solid #000000;
border-radius:1em;
}
</style>";

// Inicializar variables de forma segura
$n = isset($_POST['text1']) ? intval($_POST['text1']) : '';
$arreglo = isset($_POST['text']) ? $_POST['text'] : array();

echo "<form name='form1' method='POST'>";
echo "Ingrese la cantidad de elementos:</br>";
echo "<input type='text' name='text1' value='" . htmlspecialchars($n) . "' >";
echo "<input type='submit' name='ok' value='Enviar' ><br>";

if ($n > 0) {
    echo "=============================<br>
    Agregar Elementos al Arreglo: <br>";
    for ($k = 0; $k < $n; $k++) {
        $valor = isset($arreglo[$k]) ? htmlspecialchars($arreglo[$k]) : '';
        echo "$k .<input type='text' name='text[$k]' value='$valor' ><br>";
    }
    // Si ya se ingresaron todos los elementos, ordenarlos y mostrarlos
    if (!empty($arreglo) && count($arreglo) == $n) {
        // Convertir todos los valores a números
        $arreglo_numerico = array_map('floatval', $arreglo);
        // Ordenar el arreglo
        for ($i = 0; $i < $n - 1; $i++) {
            for ($j = 0; $j < $n - $i - 1; $j++) {
                if ($arreglo_numerico[$j] > $arreglo_numerico[$j + 1]) {
                    $aux = $arreglo_numerico[$j];
                    $arreglo_numerico[$j] = $arreglo_numerico[$j + 1];
                    $arreglo_numerico[$j + 1] = $aux;
                }
            }
        }
        echo "<br><b>Datos ordenados:</b><br>";
        foreach ($arreglo_numerico as $dato) {
            echo " " . htmlspecialchars($dato) . " ";
        }
    }
}
echo "</form>";
?>
