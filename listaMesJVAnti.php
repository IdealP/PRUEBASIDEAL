<?php
$i = 1; 
include_once "base.php";
$sentencia = $base_de_datos->query("SELECT * FROM pagosmen;");
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
	<title>LISTADO MENSUAL JOS VAS</title>

</head>
<body>
<nav class="navbar navbar-light navbar-fixed-top">
		<div class="container">
		<ul class="nav nav-tabs">
	<li class="nav-item">
		<a class="nav-link" href="listaMes.php">Regresar</a>
	</li>
	</ul>
		</div>
	</nav>
	<br><br>
	<div class="container">
		<div class="row">
	<div class="col-xs-12">
		<h1>CONTROL DE PAGOS MENSUAL - ANTICIPOS JOS VAS</h1>
		<form action="" >
		<table class="table table-bordered" data-toggle="table" data-click-to-select="true" data-pagination="true" data-page-list="[10, 20, 30, 40]" data-search="true" class="table-hover table-responsive" id="tableRoomList">
			<thead>
				<tr>
					<th>ESCUELA</th>
					<th>ANTICIPO 1</th>
					<th>CONCEPTO</th>
					<th>FECHA</th>
					<th>METODO_PAGO</th>
					<th>ANTICIPO 2</th>
                    <th>CONCEPTO</th>
					<th>FECHA</th>
					<th>METODO_PAGO</th>
					<th>ANTICIPO 3</th>
					<th>CONCEPTO</th>
					<th>FECHA</th>
					<th>METODO_PAGO</th>
					<th>ANTICIPO 4</th>
                    <th>CONCEPTO</th>
					<th>FECHA</th>
					<th>METODO_PAGO</th>
					
				</tr>
			</thead>
			<tbody>
				<?php foreach($escuelas as $escuela){ ?>
				<tr>
					<td><?php echo $escuela->sigla_escuela?></td>
					<td><?php echo $escuela->anticipo1?></td>
					<td><?php echo $escuela->concepto_ant1 ?></td>
					<td><?php echo $escuela->fecha_ant1?></td>
					<td><?php echo $escuela->metodo_pagoant1 ?></td>
					<td><?php echo $escuela->anticipo2 ?></td>
                    <td><?php echo $escuela->concepto_ant2?></td>
					<td><?php echo $escuela->fecha_ant2 ?></td>
					<td><?php echo $escuela->metodo_pagoant2 ?></td> 
					<td><?php echo $escuela->anticipo3?></td>
					<td><?php echo $escuela->concepto_ant3 ?></td>
					<td><?php echo $escuela->fecha_ant3?></td>
					<td><?php echo $escuela->metodo_pagoant3 ?></td>
					<td><?php echo $escuela->anticipo4 ?></td>
                    <td><?php echo $escuela->concepto_ant4?></td>
					<td><?php echo $escuela->fecha_ant4 ?></td>
					<td><?php echo $escuela->metodo_pagoant4 ?></td>
					</tr>
				<?php 
			} ?>
			</tbody>
		</table>
	</form>
	</div>

	</body>
</html>