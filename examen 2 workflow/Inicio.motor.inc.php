<?php
session_start();
$usuario = $_SESSION["usuario"] = $_GET["usuario"];
$flujo = $_GET["flujo"];
$proceso = $_GET["proceso"];

$sql0 = "select * from flujoprocesoseguimiento where flujo='" . $flujo . "' and proceso='" . $proceso . "' and usuario '" . $usuario . "'";
$resultado0 = mysqli_query($conn, $sql0);
$fila0 = mysqli_fetch_array($resultado0);
$notramite = $fila0["notramite"];

$fecha = date("Y-m-d");
$hora = date("H:i:s");

$sql1 = "update flujoprocesoseguimiento set fechafin='" . $fecha . "', horafin='" . $hora . "' ,proceso='" . $proceso . "'  where flujo='" . $flujo . "' and usuario = '" . $usuario . "' and notramite ='" . $notramite . "'";

$resultado1 = mysqli_query($conn, $sql1);
?>