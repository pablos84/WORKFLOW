<?php
include "conexion.inc.php";
$flujo = $_GET["flujo"];
$proceso = $_GET["procesoanterior"];
$procesosiguiente = $_GET["proceso"];
$sql = "select * from flujoproceso where flujo = '$flujo' and proceso = '$proceso'";
$resultado = mysqli_query($conn, $sql);
$fila = mysqli_fetch_array($resultado);
$pantalla = $fila['pantalla'];
$pantalla .= ".motor.inc.php";
include $pantalla;
header("Location: principal.php?flujo=$flujo&proceso= $procesosiguiente");
?>