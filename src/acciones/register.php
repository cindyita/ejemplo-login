<?php
require_once "../model/database.php";

$nombre = $_POST['name'];
$email  = $_POST['email'];
$pass   = $_POST['pswd'];

$passCodificada = base64_encode($pass);

$check = $pdo->query("SELECT * FROM usuarios WHERE email = '$email'");
if ($check->rowCount() > 0) {
    echo "El correo ya fue registrado.<br /><a href='../../index.php?page=login'>Ir al login</a>";
    exit;
}

$sql = "INSERT INTO usuarios (name, email, pass) VALUES ('$nombre', '$email', '$passCodificada')";
$res = $pdo->exec($sql);

if ($res) {
    echo "<div>Se ha registrado el usuario.<br /><a href='../../index.php?page=login'>Ir al login</a></div>";
} else {
    echo "<div>Error al registrar.<br /><a href='../../index.php?page=register'>Ir al registro</a></div>";
}
