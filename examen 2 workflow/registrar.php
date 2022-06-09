<?php 
include("conexion.inc.php");

$Usuario = $_POST['usuario'];
$Contraseña = $_POST['contraseña'];
$notramite = gmp_random_range(1000, 2000);

date_default_timezone_set("America/La_Paz");

$fechainicio = date("Y-m-d");
$horainicio = date("H:i:s");

$consulta = "INSERT INTO usuarios (usuario, contraseña, rol) VALUES ('$Usuario','$Contraseña','FRENTE')";
$resultado = mysqli_query($conn, $consulta);

$consulta2 = "INSERT INTO flujoprocesoseguimiento (flujo, proceso, notramite, usuario, fechainicio, horainicio, fechafin, horafin) VALUES ('F1', 'P1', '$notramite', '$Usuario', '$fechainicio', '$horainicio', null , null)";
$resultado2 = mysqli_query($conn, $consulta2);

if ($resultado) {
   header("Location: index.php");
}else{
    header("Location: formregistrar.php");
   }
?>