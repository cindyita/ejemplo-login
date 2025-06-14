<?php 
if(!isset($_SESSION['email'])){
    echo "<div>Acceso no autorizado, inicia sesión para ver esta página.<br /><a href='index.php?page=login'>Iniciar sesión</a></div>";
    exit;
}
require_once "src/acciones/usuarios.php";
?>
<div class="p-4 card box-form">
    <h3>Dashboard</h3>
    <h6>Bienvenid@ <?php echo $_SESSION['name']; ?></h6>
    <h5 class="pt-4">Usuarios</h5>
    <div class="py-2">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
            </thead>
            <tbody>
            <?php while ($usuario = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><?php echo $usuario['id']; ?></td>
                <td><?php echo $usuario['name']; ?></td>
                <td><?php echo $usuario['email']; ?></td>
                <td><?php echo $usuario['pass']; ?></td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="w-100 d-flex justify-content-between">
        <a href="index.php?page=login">Login</a>
        <a href="index.php?page=register">Register</a>
        <a href="index.php?page=logout">Cerrar sesión</a>
    </div>
</div>