<?php
include "cabecera.inc.php";
session_start();
?>
<div id="contenido">
    <h3>Convocatoria</h3>
    <div align="center">
        <iframe src="http://docs.google.com/gview?url=http://www.informatica.edu.bo/media/noticias/CONV_1_ELEC_DIRCTOR.pdf&embedded=true" style="width:1000px ;height:320px;                
        display: flex;
    align-items: center;
    justify-content: center;
        " frameborder="1"></iframe>
    </div> <br>
    <?php
    echo "<b> Usuario: " . $_SESSION["usuario"] . "</b> <br>";
    echo "<b> Proceso: " . $proceso . "</b>";
    ?>
</div>
<?php include "pie.inc.php"; ?>