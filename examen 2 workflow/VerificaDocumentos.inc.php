<?php
include "cabecera.inc.php";
session_start();
?>
<div id="contenido">
    <h3>Revisión de Documentos</h3>
    <br>
    <h3>¿Esta todo completo?</h3>
    <input type="text" name="pregunta" value="" />
    <br>
    <?php
    echo "<b> Usuario: " . $_SESSION["usuario"] . "</b> <br>";
    echo "<b> Proceso: " . $proceso . "</b>";
    ?>
</div>
<?php include "pie.inc.php"; ?>