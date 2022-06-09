<?php include "cabecera.inc.php"; ?>

<h2>Registro Nuevo Usuario</h2>
<div id="contenedorcentrado">
    <div id="login">
        <form method="POST" action="registrar.php">
            <h3>Usuario</h3>
            <input type="text" name="usuario" placeholder="Nombre de usuario" required>
            <h3>Contraseña</h3>
            <input type="password" name="contraseña" placeholder="Contraseña" required>
            <button type="submit" name="register">REGISTRAR</button>
        </form>
    </div>
</div>
<?php include "pie.inc.php"; ?>