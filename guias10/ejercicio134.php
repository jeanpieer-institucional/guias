<?php
echo "<form name=form1 method='post'>";
if (isset($_POST['ok'])){
    echo "<input type='password' name=text1 size=8 maxlength=8>";
}
echo "<input type='submit' name=ok value='Enviar'>";
echo "</form>";
?>