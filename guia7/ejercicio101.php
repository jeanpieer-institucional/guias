<?php
/* Ingresar el número de elementos de un arreglo (“n”), luego visualizar “n” cajas de texto para
ingresar los “n” elementos del arreglo, programar para visualizar en una sola línea los elementos
ingresados separados por comas. */

echo "<style>
form{
margin:0 auto;
padding: 1em;
width:250px;
background-color:#cafe00;
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
    // Mostrar los elementos ingresados separados por comas
    if (!empty($arreglo) && count($arreglo) == $n) {
        echo "<br><b>Elementos ingresados:</b><br>";
        // Limpiar los valores para evitar problemas de seguridad
        $arreglo_limpio = array_map('htmlspecialchars', $arreglo);
        echo implode(', ', $arreglo_limpio);
    }
}
echo "</form>";
?>
