<?php
if (!empty($_POST["botoningresar"])) {
    if (!empty($_POST["usuario"]) && !empty($_POST["contrasena"])) {
        $usuario = $_POST["usuario"];
        $contrasena = $_POST["contrasena"];
        $sql = $conexion->query("SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasena='$contrasena'");
        if ($datos = $sql->fetch(PDO::FETCH_ASSOC)) {
            header("location: index.php");
        }
    }
}
?>
