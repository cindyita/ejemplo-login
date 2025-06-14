<?php
session_start();
require_once "../model/database.php";

$email = $_POST['email'];
$pass = base64_encode($_POST['pswd']);

$sql = "SELECT * FROM usuarios WHERE email = '$email' AND pass = '$pass'";
// Para vulnerar hacer: ' OR 1=1 -- ' en email y cualquier cosa en pass

$stmt = $pdo->query($sql);
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

if ($usuario) {
    $_SESSION['email'] = $email;
    $_SESSION['name'] = $usuario['name'];
    header("location: ../../index.php?page=dashboard");
    exit;
} else {
    echo "Contraseña incorrecta o error.<br /><a href='../../index.php?page=login'>Volver al login</a>";
}
