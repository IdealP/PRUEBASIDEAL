<?php 

session_start();
$usuario = $_SESSION['username'];

echo "<h1>BIENVENIDO $usuario </h1>";

?>


<?php
$i = 1; 
include_once "base.php";
$sentencia = $base_de_datos->query("SELECT ap_pa,ap_ma,nombre,curp,nivel, promedio,generacion FROM registro_alu;");
$alumnos = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title>LISTADO DE ALUMNOS</title>

</head>
<body>
	<div class="container">
		<div class="row">
			
	<div class="col-xs-12">
		<h1>LISTA DE ALUMNOS</h1>
		
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No.</th>
					<th>NOMBRE COMPLETO</th>
					<th>CURP</th>
					<th>NIVEL</th>
					<th>PROMEDIO</th>
					<th>GENERACIÓN</th>
					<th>SELECCIONAR</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($alumnos as $alumno){ ?>
				<tr>
					<td><?php echo $i; $i++; ?></td>
					<td><?php echo $alumno->ap_pa , " " , $alumno->ap_ma, " " ,$alumno->nombre ?></td>
					<td><?php echo $alumno->curp ?></td>
					<td><?php echo $alumno->nivel ?></td>
					<td><?php echo $alumno->promedio ?></td>
					<td><?php echo $alumno->generacion ?></td>
					<td><a class="btn btn-light" href="<?php echo "editar.php?matricula=" . $alumno->matricula?>"><div class="form-check">
					<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
					<!-- <label class="form-check-label" for="flexCheckDefault">
						Aceptar
					</label> -->
					</div></a></td>
					<!-- 
					<td><a class="btn btn-danger" href="<?php echo "eliminar.php?matricula=" . $alumno->matricula?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
					<path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
					</svg></a></td> -->
				</tr>
				<?php } ?>
			</tbody>
		</table>
		<div class="d-grid gap-2">
  		<button class="btn btn-success" type="button">Aceptar</button>
	</div>
	</div>
