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
		<title>Editar Escuela</title>

	</head>
	<body>
		<div class="container">
		<div class="row">
	<div class="col-xs-12">
		<form method="post" action="guardarDatosEditadosCPM.php">
			<input type="hidden" name="nombre_escuela" value="<?php echo $escuela->nombre_escuela; ?>">
	
			<label for="nombre_escuela">Escuela:</label>
			<input value="<?php echo $escuela->nombre_escuela?>" class="form-control" name="nombre_escuela" required type="text" id="nombre_escuela" placeholder="Nombre de la Escuela">

			<label for="sigla_escuela">Abreviatura Escuela:</label>
			<input value="<?php echo $escuela->sigla_escuela ?>" class="form-control" name="sigla_escuela" required type="text" id="sigla_escuela" placeholder="Abreviatura de la Escuela">
	
			<label for="tramites">Tramites:</label>
			<input value="<?php echo $escuela->tramites ?>" class="form-control" name="tramites"  type="text" id="tramites" placeholder="Número de trámites">
			
			<label for="retro">Retroactivo:</label>
			<input value="<?php echo $escuela->retro ?>" class="form-control" name="retro"  type="text" id="retro" placeholder="Número de retroactivos">
			
			<label for="costo">Costo:</label>
			<input value="<?php echo $escuela->costo ?>" class="form-control" name="costo"  type="text" id="costo" placeholder="$Costo">
			
			<label for="total">Total:</label>
			<input value="<?php echo $escuela->total ?>" class="form-control" name="total"  type="text" id="total" placeholder="$Total">
			
			<label for="fecha_ingreso">Fecha Ingreso:</label>
			<input value="<?php echo $escuela->fecha_ingreso ?>" class="form-control" name="fecha_ingreso"  type="text" id="fecha_ingreso" placeholder="Fecha_Ingreso">
			
			<label for="restante">Restante:</label>
			<input value="<?php echo $escuela->restante ?>" class="form-control" name="restante"  type="text" id="restante"  placeholder="$restante">

			<br><br><!-- <input class="btn btn-info" type="submit" value="Guardar">
			<a class="btn btn-warning" href="./listaMesCPM.php">Cancelar</a> -->

			
			<div class="d-grid gap-2 col-6 mx-auto">
			<input class="btn btn-secondary" type="submit" value="Guardar">
			<a class="btn btn-warning" href="./listaMesCPM.php">Cancelar</a>
			</div>
		</form>
	</div>
