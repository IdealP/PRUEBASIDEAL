<?php

#Salir si alguno de los datos no está presente
if(
	!isset($_POST["nombre_escuela"]) || 
	!isset($_POST["sigla_escuela"]) || 
	!isset($_POST["tramites"]) || 
	!isset($_POST["retro"]) || 
	!isset($_POST["costo"]) || 
	!isset($_POST["total"]) ||
	!isset($_POST["fecha_ingreso"]) || 
	!isset($_POST["restante"])
) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base.php";
$nombre_escuela = $_POST["nombre_escuela"];
$sigla_escuela = $_POST["sigla_escuela"];
$tramites = $_POST["tramites"];
$retro = $_POST["retro"];
$costo = $_POST["costo"];
$total = $_POST["total"];
$fecha_ingreso = $_POST["fecha_ingreso"];
$restante = $_POST["restante"];

$sentencia = $base_de_datos->prepare("UPDATE pagosmen SET nombre_escuela = ?, sigla_escuela = ?, tramites = ?, retro = ?, costo = ?, total = ?, fecha_ingreso = ?, restante = ? WHERE nombre_escuela = ?;");
$resultado = $sentencia->execute([$nombre_escuela, $sigla_escuela, $tramites, $retro, $costo, $total, $fecha_ingreso, $restante, $nombre_escuela]);

if($resultado === TRUE){
	header("Location: ./listaMesJV.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la escuela exista.";
?>