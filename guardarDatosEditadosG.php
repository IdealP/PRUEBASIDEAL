<?php

#Salir si alguno de los datos no está presente
if(
	!isset($_POST["matricula"]) || 
	!isset($_POST["ap_P"]) || 
	!isset($_POST["ap_M"]) || 
	!isset($_POST["nombre"]) || 
	!isset($_POST["curp"]) || 
	!isset($_POST["responsable"]) 
) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base.php";
$matricula = $_POST["matricula"];
$ap_P = $_POST["ap_P"];
$ap_M = $_POST["ap_M"];
$nombre = $_POST["nombre"];
$curp = $_POST["curp"];
$responsable = $_POST["responsable"];

$sentencia = $base_de_datos->prepare("UPDATE registro_alu SET matricula = ?, ap_pa = ?, ap_ma = ?, nombre = ?, curp = ?, responsable = ? WHERE matricula = ?;");
$resultado = $sentencia->execute([$matricula, $ap_P, $ap_M, $nombre, $curp, $responsable, $matricula]);

if($resultado === TRUE){
	header("Location: ./lista.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista, así como el alumno";
?>