<?php
	/* include 'conexion2.php';
 	$query ="SELECT acta FROM registro_alu WHERE matricula='".$_GET['matricula']."'";
 	$resul = $conexion->query($query) or die(mysql_error());
 
 	if ($row = $resul->fetch_array()) {
		$contenido = $row['acta'];
		$tipo = $row['acta'];
	}
 
 	header("Content-type: $tipo");
 	echo($tipo); */

    include 'conexion2.php';
 	$query ="SELECT acta FROM registro_alu WHERE matricula='".$_GET['matricula']."'";
 	$resul = $conexion->query($query) or die(mysql_error());
 
 	if ($row = $resul->fetch_array()) {
		$contenido = $row['acta'];

 	header("Content-type: application/pdf");
 	readfile($contenido);

     	
	}


?>