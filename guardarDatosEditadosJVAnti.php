<?php

#Salir si alguno de los datos no está presente
if(
	!isset($_POST["nombre_escuela"]) || 
	!isset($_POST["anticipo1"]) || 
	!isset($_POST["concepto_ant1"]) || 
	!isset($_POST["fecha_ant1"]) || 
	!isset($_POST["metodo_pagoant1"]) || 
	!isset($_POST["anticipo2"]) || 
	!isset($_POST["concepto_ant2"]) ||
	!isset($_POST["fecha_ant2"]) || 
	!isset($_POST["metodo_pagoant2"]) ||
	!isset($_POST["anticipo3"]) || 
	!isset($_POST["concepto_ant3"]) || 
	!isset($_POST["fecha_ant3"]) || 
	!isset($_POST["metodo_pagoant3"]) || 
	!isset($_POST["anticipo4"]) || 
	!isset($_POST["concepto_ant4"]) ||
	!isset($_POST["fecha_ant4"]) || 
	!isset($_POST["metodo_pagoant4"])
) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base.php";
$nombre_escuela = $_POST["nombre_escuela"];
$anticipo1 = $_POST["anticipo1"];
$concepto_ant1 = $_POST["concepto_ant1"];
$fecha_ant1 = $_POST["fecha_ant1"];
$metodo_pagoant1 = $_POST["metodo_pagoant1"];
$anticipo2 = $_POST["anticipo2"];
$concepto_ant2 = $_POST["concepto_ant2"];
$fecha_ant2 = $_POST["fecha_ant2"];
$metodo_pagoant2 = $_POST["metodo_pagoant2"];
$anticipo3 = $_POST["anticipo3"];
$concepto_ant3 = $_POST["concepto_ant3"];
$fecha_ant3 = $_POST["fecha_ant3"];
$metodo_pagoant3 = $_POST["metodo_pagoant3"];
$anticipo4 = $_POST["anticipo4"];
$concepto_ant4 = $_POST["concepto_ant4"];
$fecha_ant4 = $_POST["fecha_ant4"];
$metodo_pagoant4 = $_POST["metodo_pagoant4"];

$sentencia = $base_de_datos->prepare("UPDATE pagosmen SET nombre_escuela = ?, anticipo1 = ?, concepto_ant1 = ?,
 fecha_ant1 = ?, metodo_pagoant1 = ?, anticipo2 = ?, concepto_ant2 = ?, fecha_ant2 = ?, metodo_pagoant2 = ?, anticipo3 = ?,
 concepto_ant3 = ?, fecha_ant3 = ?, metodo_pagoant3 = ?, anticipo4 = ?, concepto_ant4 = ?, fecha_ant4 = ?,
 metodo_pagoant4 = ? WHERE nombre_escuela = ?;");
$resultado = $sentencia->execute([$nombre_escuela, $anticipo1, $concepto_ant1, $fecha_ant1, $metodo_pagoant1, $anticipo2,
 $concepto_ant2, $fecha_ant2, $metodo_pagoant2,$anticipo3, $concepto_ant3, $fecha_ant3,
 $metodo_pagoant3, $anticipo4, $concepto_ant4, $fecha_ant4, $metodo_pagoant4, $nombre_escuela]);

if($resultado === TRUE){
	header("Location: ./listaMesJVAntiC.php");
	exit;
}
else echo "Algo salió mal. Por favor intentalo de nuevo";
?>