<?php
echo "<form name=form1 method='post'>";
if (isset($_POST['ok'])){
    echo "<input type='text' name=text1 size=40 disabled>";
}
echo "<input type='submit' name=ok value='Enviar'>";
echo "</form>";
?>