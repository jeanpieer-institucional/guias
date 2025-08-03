<?php
echo "<form name=form1 method='post'>";
if (isset($_POST['ok'])){
    echo "<input type='text' name=text1 size=40 value='Cambia este mensaje si puedes' readonly>";
}
echo "<input type='submit' name=ok value='Enviar'>";
echo "</form>";
?>