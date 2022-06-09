<?php
include "cabecera.inc.php";
session_start();
?>
<div id="contenido">
    <h3>Registra los datos de tu FRENTE</h3>
    <div id="login">
        <form method="POST" action="registrar.php">
            <h3>Nombre</h3>
            <input type="text" name="nombre" placeholder="Nombre del FRENTE" required>
            <h3>Sigla</h3>
            <input type="text" name="sigla" placeholder="SIGLA" required>
            <h3>Colores</h3>
            <input type="text" name="colores" placeholder="colores representativos" required>
            <h3>Candidato</h3>
            <input type="text" name="candidato" placeholder="Nombre del CANDIDATO" required>
            <!--button type="submit" name="register">REGISTRAR</button-->
        </form>
    </div>
    <?php echo "<b> Usuario: " . $_SESSION["usuario"] . "</b><br>";
    echo "<b> Proceso: " . $proceso . "</b>";
    ?>
</div>
<?php include "pie.inc.php"; ?>