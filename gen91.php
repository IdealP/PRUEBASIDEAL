<?php
$i = 1; 
include_once "base.php";
$sentencia = $base_de_datos->query("SELECT * FROM registro_alu  WHERE generacion = '2019-2021' ;");
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
	<nav class="navbar  navbar-fixed-top">
		<div class="container">
		<ul class="nav nav-tabs">
	<li class="nav-item">
		<a class="nav-link" href="lista.php">General</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="retro.php">2013-2016 - Retroactivo</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="gen69.php">2016-2019</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="gen72.php">2017-2020</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="gen82.php">2018-2020</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="gen91.php">2019-2021</a>
	</li>
	</ul>
		</div>
	</nav>
	<br><br>
	<div class="container">
		<div class="row">
			
	<div class="col-xs-12">
		<h1>GENERACIÓN 2019-2021</h1>
		<table class="table table-bordered" data-toggle="table" data-click-to-select="true" data-pagination="true" data-page-list="[10, 20, 30, 40]" data-search="true" class="table-hover table-responsive" id="tableRoomList">
			<thead>
				<tr>
					<th>No.</th>
					<th>NOMBRE COMPLETO</th>
					<th>CURP</th>
					<th>RESPONSABLE</th>
					<th>GENERACIÓN</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($alumnos as $alumno){ ?>
				<tr>
					<td><?php echo $i; $i++; ?></td>
					<td><?php echo $alumno->ap_pa , " " , $alumno->ap_ma, " " ,$alumno->nombre ?></td>
					<td><?php echo $alumno->curp ?></td>
					<td><?php echo $alumno->responsable ?></td>
					<td><?php echo $alumno->generacion ?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
