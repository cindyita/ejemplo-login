<div class="card p-4 box-form">
    <h3>Registro</h3>
    <?php if(isset($_SESSION) && isset($_SESSION['name'])){
        echo "<div>Ya estás logeado como: ".$_SESSION['name']."<br /><a href='index.php?page=logout'>Cerrar sesión</a><br /><a href='index.php?page=dashboard'>Ir al dashboard</a></div>";
    } ?>
    <div class="p-4 w-100">
         <form action="src/acciones/register.php" method="post">
            <p class="text-danger d-none" id="register-error"><strong>ERROR:</strong> Las contraseñas no son iguales</p>
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="register-name" placeholder="Ingresa tu nombre" name="name">
            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="register-email" placeholder="Ingresa tu email" name="email">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Contraseña:</label>
                <input type="password" class="form-control" id="register-pwd" placeholder="Ingresa tu contraseña" name="pswd">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Validación de contraseña:</label>
                <input type="password" class="form-control" id="register-cpwd" placeholder="Ingresa tu contraseña" name="cpswd" onblur="checkValidPass()">
            </div>
            <div class="pb-3">
                <a href="index.php?page=login">Ya tengo cuenta</a>
            </div>
            <button type="submit" class="btn btn-primary" id="register-btn" disabled>Registrarse</button>
            </form> 
    </div>
</div>