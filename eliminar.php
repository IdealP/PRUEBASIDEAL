<?php
if(!isset($_GET["matricula"])) exit();
$id = $_GET["matricula"];
include_once "base.php";
$sentencia = $base_de_datos->prepare("DELETE FROM registro_alu WHERE matricula = ?;");
$resultado = $sentencia->execute([$id]);
if($resultado === TRUE){
	header("Location: ./lista.php");
	exit;
}
else echo "Algo salió mal, intentalo de nuevo";
?>