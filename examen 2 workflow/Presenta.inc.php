<?php
include "cabecera.inc.php";
session_start();
?>
<div id="contenido">
    <h3> Presentacion de Requisitos </h3>
    <table style="width: 90%;">
        <thead>
            <tr>
                <td>No.</td>
                <td>Requisito</td>
                <td>Acción</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1.</td>
                <td>Certificado de Nacimiento original, actualizado y fotocopia simple de la Cédula de Identidad.</td>
                <td><input type="file"></td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Certificado que acredite antigüedad y Categoría.</td>
                <td><input type="file"></td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Fotocopias Legalizadas del Título Profesional, Diploma Académico y/o Certficado original expedido por el Departamento de Personal Docente.</td>
                <td><input type="file"></td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Certificado emitido por el Departamento de Asesoría Jurídica que acredite no haber atentado contra la Autonomía Universitaria.</td>
                <td><input type="file"></td>
            </tr>
            <tr>
                <td>5.</td>
                <td>Certificado original del Registro Judicial de Antecedentes Penales REJAP.</td>
                <td><input type="file"></td>
            </tr>
            <tr>
                <td>6.</td>
                <td>Certificado otorgado por la Comisión de Procesos de la UMSA.</td>
                <td><input type="file"></td>
            </tr>
            <tr>
                <td>7.</td>
                <td>Certificados emitidos por la Dirección Administrativa Financiera y por el Área Desconcentrada de la Facultad de No tener deudas pendientes.</td>
                <td><input type="file"></td>
            </tr>
            <tr>
                <td>8.</td>
                <td>Programa de gestión (académico, administrativo y financiero).</td>
                <td><input type="file"></td>
            </tr>
        </tbody>
    </table>
    <?php echo "<b> Usuario: " . $_SESSION["usuario"] . "</b><br>";
    echo "<b> Proceso: " . $proceso . "</b>"; ?>
</div>
<?php include "pie.inc.php"; ?>