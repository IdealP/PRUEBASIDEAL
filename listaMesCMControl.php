<?php
$i = 1; 
include_once "base.php";
$sentencia = $base_de_datos->query("SELECT * FROM pagosmenc;");
$escuelas = $sentencia->fetchAll(PDO::FETCH_OBJ);
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
	<title>LISTADO MENSUAL CEEPAM</title>

</head>
<body>
<nav class="navbar navbar-light navbar-fixed-top">
		<div class="container">
		<ul class="nav nav-tabs">
	<li class="nav-item">
		<a class="nav-link" href="listaMesCPM.php">Regresar</a>
	</li>
	</ul>
		</div>
	</nav>
	<br><br>
	<div class="container">
		<div class="row">
	<div class="col-xs-12">
		<h1>CONTROL DE PAGOS MENSUAL - CONTROL CEEPAM</h1> 
		<form action="" >
		<table class="table table-bordered" data-toggle="table" data-click-to-select="true" data-pagination="true" data-page-list="[10, 20, 30, 40]" data-search="true" class="table-hover table-responsive" id="tableRoomList">
			<thead>
				<tr>
					<th>ESCUELA</th>
					<th>UTILIDAD</th>
					<th>PARCIAL</th>
					<th>COSTO</th>
					<th>PAGADO</th>
					<th>PAGADO</th>
                    <th>PENDIENTE</th>
					<th>OBSERVACIONES</th>
					<th>EDITAR</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($escuelas as $escuela){ ?>
				<tr>
					<td><?php echo $escuela->sigla_escuela ?></td>
					<td><?php echo $escuela->utilidad?></td>
					<td><?php echo $escuela->parcial?></td>
					<td><?php echo $escuela->costo2?></td>
					<td><?php echo $escuela->pagado1?></td>
					<td><?php echo $escuela->pagado2?></td>
                    <td><?php echo $escuela->pendiente?></td>
					<td><?php echo $escuela->observaciones?></td>
					<td><a class="btn btn-warning" href="<?php echo "editarCMControl.php?nombre_escuela=" . $escuela->nombre_escuela?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
					<path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
					</svg></a></td> 
					</tr>
				<?php 
			} ?>
			</tbody>
		</table>
	</form>
	</div>

	</body>
</html>