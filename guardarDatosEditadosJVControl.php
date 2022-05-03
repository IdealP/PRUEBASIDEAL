<?php

#Salir si alguno de los datos no está presente
if(
	!isset($_POST["nombre_escuela"]) || 
	!isset($_POST["utilidad"]) || 
	!isset($_POST["parcial"]) || 
	!isset($_POST["costo2"]) || 
	!isset($_POST["pagado1"]) || 
	!isset($_POST["pagado2"]) || 
	!isset($_POST["pendiente"]) ||
	!isset($_POST["observaciones"]) 
) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base.php";
$nombre_escuela = $_POST["nombre_escuela"];
$utilidad = $_POST["utilidad"];
$parcial = $_POST["parcial"];
$costo2 = $_POST["costo2"];
$pagado1 = $_POST["pagado1"];
$pagado2 = $_POST["pagado2"];
$pendiente = $_POST["pendiente"];
$observaciones = $_POST["observaciones"];

$sentencia = $base_de_datos->prepare("UPDATE pagosmen SET nombre_escuela = ?, utilidad = ?, parcial = ?,
 costo2 = ?, pagado1 = ?, pagado2 = ?, pendiente = ?, observaciones = ?  WHERE nombre_escuela = ?;");

$resultado = $sentencia->execute([$nombre_escuela, $utilidad, $parcial, $costo2, $pagado1, $pagado2, $pendiente, $observaciones, $nombre_escuela]);


if($resultado === TRUE){
	header("Location: ./listaMesJVControl.php");
	exit;
}
else echo "Algo salió mal. Por favor intentalo de nuevo";
?>