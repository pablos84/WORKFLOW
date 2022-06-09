<?php
include "conexion.inc.php";
$usuario=$_GET["usuario"];
$contraseña=$_GET["contraseña"];
$sql="select * from usuarios where usuario='".$usuario;
$sql.="' and contraseña='".$contraseña."'";
$resultado=mysqli_query($conn, $sql);
$fila=mysqli_fetch_array($resultado);
if ($fila["usuario"]==$usuario and $fila["contraseña"]==$contraseña)
{
	session_start();
	$_SESSION["usuario"] = $usuario;
	if ($fila["rol"] == "FRENTE") {
		header("Location: bandeja.php");
	} else {
		header("Location: bandejadcarrera.php");
	}
}
else
{
	header("Location: index.php");
}
?>
