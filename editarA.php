<?php
if(!isset($_GET["matricula"])) exit();
$id = $_GET["matricula"];
include_once "base.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM listaa WHERE matricula = ?;");
$sentencia->execute([$id]);
$alumno = $sentencia->fetch(PDO::FETCH_OBJ);
if($alumno === FALSE){
	echo "¡No existe algún alumno con esa Matricula!";
	exit();
}

?>
<?php
	?>
	<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<title>Editar lista Abierta</title>

	</head>
	<body>
		<div class="container">
		<div class="row">
	<div class="col-xs-12">
		<form method="post" action="guardarDatosEditadosA.php">
			<input type="hidden" name="matricula" value="<?php echo $alumno->matricula; ?>">
	
			<label for="ap_P">Apellido Paterno:</label>
			<input value="<?php echo $alumno->ap_pa ?>" class="form-control" name="ap_P" required type="text" id="ap_P" placeholder="Apellido Paterno">
			<!-- <textarea required id="ap_P" name="ap_P" cols="30" rows="5" class="form-control"><?php echo $producto->descripcion ?></textarea> -->

			<label for="ap_M">Apellido Materno:</label>
			<input value="<?php echo $alumno->ap_ma ?>" class="form-control" name="ap_M" required type="text" id="ap_M" placeholder="Apellido Materno">
			
			<label for="nombre">Nombre:</label>
			<input value="<?php echo $alumno->nombre ?>" class="form-control" name="nombre" required type="text" id="nombre" placeholder="Nombre">
			
			<label for="curp">CURP:</label>
			<input value="<?php echo $alumno->curp ?>" class="form-control" name="curp" required type="text" id="curp" placeholder="CURP(18)">

			<label for="responsable">Responsable:</label>
			<input value="" class="form-control" name="responsable" required type="text" id="responsable" placeholder="Responsable">

			<label for="costo">Costo:</label>
			<input value="" class="form-control" name="costo" required type="text" id="costo" placeholder="$000000">

		<!-- 	<br><br><input class="btn btn-info" type="submit" value="Guardar">
			<a class="btn btn-warning" href="./listaA.php">Cancelar</a>
 		-->
			<br><br>

			<div class="d-grid gap-2 col-6 mx-auto">
			<input class="btn btn-secondary" type="submit" value="Guardar">
			<a class="btn btn-warning" href="./listaA.php">Cancelar</a>
			</div>
		</form>
	</div>
