<?php
if(!isset($_GET["nombre_escuela"])) exit();
$id = $_GET["nombre_escuela"];
include_once "base.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM pagosmen WHERE nombre_escuela = ?;");
$sentencia->execute([$id]);
$escuela = $sentencia->fetch(PDO::FETCH_OBJ);
if($escuela === FALSE){
	echo "¡No existe registro de la escuela ";
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
		<title>Editar Anticipos JOS VAS</title>

	</head>
	<body>
		<div class="container">
		<div class="row">
	<div class="col-xs-12">
		<br><br>
		<form method="post" action="guardarDatosEditadosJVAnti.php">
			<input type="hidden" name="nombre_escuela" value="<?php echo $escuela->nombre_escuela; ?>">
	
			<label for="anticipo1">Anticipo 1:</label>
			<input value="<?php echo $escuela->anticipo1?>" class="form-control" name="anticipo1"  type="text" id="anticipo1" placeholder="$Cantidad de anticipo">

			<label for="concepto_ant1">Concepto 1:</label>
			<input value="<?php echo $escuela->concepto_ant1 ?>" class="form-control" name="concepto_ant1"  type="text" id="concepto_ant1" placeholder="Concepto del anticipo">
	
			<label for="fecha_ant1">Fecha 1:</label>
			<input value="<?php echo $escuela->fecha_ant1 ?>" class="form-control" name="fecha_ant1"  type="date" id="fecha_ant1" placeholder="Fecha del anticipo">
			
			<label for="metodo_pagoant1">Método de Pago 1:</label>
			<input value="<?php echo $escuela->metodo_pagoant1 ?>" class="form-control" name="metodo_pagoant1"  type="text" id="metodo_pagoant1" placeholder="Método de Pago">
           
			<label for="anticipo2">Anticipo 2:</label>
			<input value="<?php echo $escuela->anticipo2?>" class="form-control" name="anticipo2"  type="text" id="anticipo2" placeholder="$Cantidad de anticipo">

			<label for="concepto_ant2">Concepto 2:</label>
			<input value="<?php echo $escuela->concepto_ant2 ?>" class="form-control" name="concepto_ant2"  type="text" id="concepto_ant2" placeholder="Concepto del anticipo">
	
			<label for="fecha_ant2">Fecha 2:</label>
			<input value="<?php echo $escuela->fecha_ant2 ?>" class="form-control" name="fecha_ant2"  type="text" id="fecha_ant2" placeholder="Fecha del anticipo">
			
			<label for="metodo_pagoant2">Método de Pago 2:</label>
			<input value="<?php echo $escuela->metodo_pagoant2 ?>" class="form-control" name="metodo_pagoant2"  type="text" id="metodo_pagoant2" placeholder="Método de Pago">
			
			
			<label for="anticipo3">Anticipo 3:</label>
			<input value="<?php echo $escuela->anticipo3?>" class="form-control" name="anticipo3"  type="text" id="anticipo3" placeholder="$Cantidad de anticipo">

			<label for="concepto_ant3">Concepto 3:</label>
			<input value="<?php echo $escuela->concepto_ant3 ?>" class="form-control" name="concepto_ant3"  type="text" id="concepto_ant3" placeholder="Concepto del anticipo">
	
			<label for="fecha_ant3">Fecha 3:</label>
			<input value="<?php echo $escuela->fecha_ant3 ?>" class="form-control" name="fecha_ant3"  type="text" id="fecha_ant3" placeholder="Fecha del anticipo">
			
			<label for="metodo_pagoant3">Método de Pago 3:</label>
			<input value="<?php echo $escuela->metodo_pagoant3 ?>" class="form-control" name="metodo_pagoant3"  type="text" id="metodo_pagoant3" placeholder="Método de Pago">
			
		
			<label for="anticipo4">Anticipo 4:</label>
			<input value="<?php echo $escuela->anticipo4?>" class="form-control" name="anticipo4"  type="text" id="anticipo4" placeholder="$Cantidad de anticipo">

			<label for="concepto_ant4">Concepto 4:</label>
			<input value="<?php echo $escuela->concepto_ant4 ?>" class="form-control" name="concepto_ant4"  type="text" id="concepto_ant4" placeholder="Concepto del anticipo">
	
			<label for="fecha_ant4">Fecha 4:</label>
			<input value="<?php echo $escuela->fecha_ant4 ?>" class="form-control" name="fecha_ant4"  type="text" id="fecha_ant4" placeholder="Fecha del anticipo">
			
			<label for="metodo_pagoant4">Método de Pago 4:</label>
			<input value="<?php echo $escuela->metodo_pagoant4 ?>" class="form-control" name="metodo_pagoant4"  type="text" id="metodo_pagoant4" placeholder="Método de Pago">
			
			<br><br><!-- <input class="btn btn-info" type="submit" value="Guardar">
			<a class="btn btn-warning" href="./listaMesJVAntiC.php">Cancelar</a> -->

			<div class="d-grid gap-2 col-6 mx-auto">
			<input class="btn btn-secondary" type="submit" value="Guardar">
			<a class="btn btn-warning" href="./listaMesJVAntiC.php">Cancelar</a>
			</div>
		</form>
	</div>
