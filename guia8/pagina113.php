<?php
$text1 = isset($_POST['text1']) ? $_POST['text1'] : '';
$nombre = array("chino"=>"Miguel Ruiz","pepe"=>"Jose Lopez", "manolo"=>"Manuel Quispe","lucho"=>"Luis Solis");
$telefono = array("chino"=>"111-5684","pepe"=>"222-5348", "manolo"=>"333-2587","lucho"=>"444-5687");
$correo = array("chino"=>"Miguel@Ruiz.com","pepe"=>"Jose@Lopez.com", "manolo"=>"Manuel@Quispe.com","lucho"=>"Luis@Solis.com");
////formunlario
echo "<form name=form1 method=POST>
ALIAS = <input type=text name=text1 value=\"$text1\" ><br>
<input type=submit name=ok value=enviar >
</form><br>";
////programacion
if ($text1 && isset($nombre[$text1])) {
	echo "NOMBRE = ".$nombre[$text1]."<br>";
	echo "TELEFONO = ".$telefono[$text1]."<br>";
	echo "CORREO = ".$correo[$text1]."<br>";
}
?>
