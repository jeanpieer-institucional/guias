<?php
/* 
Ingresar un usuario y una clave y verificar si el usuario y la clave son correctos.
(Usuario = “tierra”, Clave = “luna”) */

if ( isset($_POST['usuario'])) {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contra'];
} else {
    $usuario="";
    $contrasena="";
}
$usuarioCorrecto = "tierra";
$contrasenaCorrecta = "luna";

echo "<form method=post>
<link rel=stylesheet href=css/style.css>
<div class=container>
Ingrese el usuario: <input type=text name=usuario autocomplete=off valor=$usuario><br>
Ingrese la contraseña: <input type=password name=contra autocomplete=off valor=$contrasena><br>
<input type=submit name=verifica value=Verificar>
</div>
</form>";

$usuarioValido = $usuario==$usuarioCorrecto;
$contrasenaValida = $contrasena==$contrasenaCorrecta;

if ( isset($_POST['usuario'])) {

    if ($usuarioValido && $contrasenaValida) {
        echo "<script>alert('Acceso permitido. Bienvenido $usuario');</script>";
    } else {
        if (!$usuarioValido) {
            echo "<script>alert('Acceso denegado. Usuario incorrecto');</script>";
        }else if (!$contrasenaValida) {
            echo "<script>alert('Acceso denegado. Contraseña incorrecta');</script>";
        }else {
            echo "<script>alert('Acceso denegado. Usuario y contraseña incorrectos');</script>";
        }
        //echo "<script>alert('Acceso denegado. Usuario o contraseña incorrectos');</script>";
    }
}

?>