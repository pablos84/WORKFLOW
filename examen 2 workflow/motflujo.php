	<?php
	include "conexion.inc.php";
	$flujo=$_GET["flujo"];
	$proceso=$_GET["proceso"];
	$pantalla=$_GET["pantalla"];
	include $pantalla.".mot.inc.php";

	if (isset($_GET["Siguiente"]))
	{
		$sql="select * from flujoproceso where flujo='".$flujo."' and proceso='".$proceso."'";
		$resultado=mysqli_query($conn, $sql);
		$fila=mysqli_fetch_array($resultado);
		$procesosiguiente=$fila["procesosiguiente"];

		$sql0 = "select * from flujoprocesoseguimiento where flujo='" . $flujo . "' and proceso='" . $proceso . "' and usuario '" . $usuario . "'";
		$resultado0 = mysqli_query($conn, $sql0);
		$fila0 = mysqli_fetch_array($resultado0);
		
		$notramite = $fila0["notramite"];
		$fecha = date("Y-m-d");
		$hora = date("H:i:s");

		$sql1 = "update flujoprocesoseguimiento set fechafin ='" . $fecha . "' horafin='" . $hora . "' where flujo='" . $flujo . "' and proceso='" . $proceso . "' and usuario '" . $usuario . "' and notramite ='" . $notramite . "'";
		$resultado1 = mysqli_query($conn, $sql1);

		//echo $fila["tipo"];
		if ($procesosiguiente==null && $fila["tipo"]=='C')
		{
			$sql= "select * from flujoprocesocondicionante where flujo='".$flujo."' and proceso='".$proceso."'";
			$resultado2=mysqli_query($conn, $sql);
			$fila2=mysqli_fetch_array($resultado2);
			if ($pregunta=='SI')
				$procesosiguiente=$fila2["procesosi"];
			else 
				$procesosiguiente=$fila2["procesono"];
		}
		echo $procesosiguiente;
		header("Location: desflujo.php?flujo=".$flujo."&proceso=".$procesosiguiente);
	}
	else
	{
		$sql="select * from flujoproceso where flujo='".$flujo."' and procesosiguiente='".$proceso."'";
		$resultado=mysqli_query($conn, $sql);
		$fila=mysqli_fetch_array($resultado);
		$proceso=$fila["proceso"];
		header("Location: desflujo.php?flujo=".$flujo."&proceso=".$proceso);
	}
	
	?>
