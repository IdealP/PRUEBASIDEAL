<?php
$i = 1; 
include_once "base.php";
$sentencia = $base_de_datos->query("SELECT * FROM alumnosj;");
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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.min.js"></script>
	<title>LISTADO DE ALUMNOS</title>

</head>
<body>
	<nav class="navbar navbar-fixed-top">
		<div class="container">
		<ul class="nav nav-tabs">
	<li class="nav-item">
		<a class="nav-link" href="listarj.php">Jose Vasconcelos</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="listarB.php">Bata</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="listarC.php">Ceepam</a>
	</li>
	</ul>
		</div>
	</nav>
	<br><br>
	<div class="container">
		<div class="row">
			
	<div class="col-xs-12">
		<h1>LISTA JOSE VASCONCELOS</h1>
		<table class="table table-bordered" data-toggle="table" data-click-to-select="true" data-pagination="true" data-page-list="[10, 20, 30, 40]" data-search="true" class="table-hover table-responsive" id="tableRoomList">
			<thead>
				<tr>
					<th>No.</th>
					<th>NOMBRE COMPLETO</th>
					<th>CURP</th>
					<th>RESPONSABLE</th>
					<th>INCIDENCIAS</th>
					<th>PROMEDIO</th>
					<th>GENERACIÓN</th>
					<th>ESCUELA</th>
					<th>EDITAR</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($alumnos as $alumno){ ?>
				<tr>
					<td><?php echo $i; $i++; ?></td>
					<td><?php echo $alumno->ap_pa , " " , $alumno->ap_ma, " " ,$alumno->nombre ?></td>
					<td><?php echo $alumno->curp ?></td>
					<td><?php echo $alumno->responsable ?></td>
					<td><?php echo $alumno->incidencias ?></td>
					<td><?php echo $alumno->promedio ?></td>
					<td><?php echo $alumno->generacion ?></td>
					<td><?php echo $alumno->escuela ?></td>
					<td><a class="btn btn-warning" href="<?php echo "editar.php?matricula=" . $alumno->matricula?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
					<path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
					</svg></a></td>
					<!-- <td><a class="btn btn-danger" href="<?php echo "?matricula=" . $alumno->matricula?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
					<path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
					</svg></a></td> -->
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
