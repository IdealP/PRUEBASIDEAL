<?php
if(!isset($_GET["nombre_escuela"])) exit();
$id = $_GET["nombre_escuela"];
include_once "base.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM pagosmenc WHERE nombre_escuela = ?;");
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
		<title>Editar Control CEEPAM</title>

	</head>
	<body>
		<div class="container">
		<div class="row">
	<div class="col-xs-12">
		<br><br>
		<form method="post" action="guardarDatosEditadosCMControl.php">
			<input type="hidden" name="nombre_escuela" value="<?php echo $escuela->nombre_escuela; ?>">
	
			<label for="utilidad">Utilidad:</label>
			<input value="<?php echo $escuela->utilidad?>" class="form-control" name="utilidad"  type="text" id="utilidad" placeholder="4%">

			<label for="parcial">Parcial:</label>
			<input value="<?php echo $escuela->parcial ?>" class="form-control" name="parcial"  type="text" id="parcial" placeholder="$parcial">
	
			<label for="costo2">Costo:</label>
			<input value="<?php echo $escuela->costo2 ?>" class="form-control" name="costo2"  type="text" id="costo2" placeholder="$costo">
			
			<label for="pagado1">Pagado:</label>
			<input value="<?php echo $escuela->pagado1 ?>" class="form-control" name="pagado1"  type="text" id="pagado1" placeholder="$Pagado">
          
			<label for="pagado2">Pagado:</label>
			<input value="<?php echo $escuela->pagado2?>" class="form-control" name="pagado2"  type="text" id="pagado2" placeholder="$Pagado">

			<label for="pendiente">Pendiente:</label>
			<input value="<?php echo $escuela->pendiente ?>" class="form-control" name="pendiente"  type="text" id="pendiente" placeholder="$Pendiente">
	
			<label for="observaciones">Observaciones:</label>
			<textarea id="observaciones" name="observaciones" cols="30" rows="5" class="form-control"><?php echo $escuela->observaciones ?></textarea>

			<br><br><!-- <input class="btn btn-info" type="submit" value="Guardar">
			<a class="btn btn-warning" href="./listaMesCMControl.php">Cancelar</a> -->

			<div class="d-grid gap-2 col-6 mx-auto">
			<input class="btn btn-secondary" type="submit" value="Guardar">
			<a class="btn btn-warning" href="./listaMesCMControl.php">Cancelar</a>
			</div>
		</form>
	</div>
