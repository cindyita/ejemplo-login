<div class="card p-4 box-form">
    <h3>Login</h3>
    <?php if(isset($_SESSION) && isset($_SESSION['name'])){
        echo "<div>Ya estás logeado como: ".$_SESSION['name']."<br /><a href='index.php?page=logout'>Cerrar sesión</a><br /><a href='index.php?page=dashboard'>Ir al dashboard</a></div>";
    } ?>
    <div class="p-4 w-100">
         <form action="src/acciones/login.php" method="post">
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="login-email" placeholder="Ingresa tu email" name="email">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Contraseña:</label>
                <input type="password" class="form-control" id="login-pwd" placeholder="Ingresa tu contraseña" name="pswd">
            </div>
            <div class="pb-3">
                <a href="index.php?page=register">No tengo cuenta</a>
            </div>
            <button type="submit" class="btn btn-primary" id="login-btn">Entrar</button>
            </form> 
    </div>
</div>