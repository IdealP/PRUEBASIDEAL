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
	<title>LISTADO MENSUAL</title>

</head>
<body>

<div class="container">
		<div class="row">
			
			
	<div class="col-xs-12">
    <nav class="navbar navbar-light navbar-fixed-top">
		<div class="container">
		<ul class="nav nav-tabs">
	<li class="nav-item">
		<a class="nav-link" href="listaMes.php">JOS VAS</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="listaMesCM.php">CEEPAM</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="">PIÑON</a>
	</li>
	</ul>
		</div>
	</nav>
    <br><br>
		<h1>CONTROL DE PAGOS MENSUAL - CERTIFICADOS CEEPAM</h1>
		<div>
			<a class="btn btn-primary" href="listaMesCMAnti.php">Anticipos<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
			<path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
		    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
			</svg></a>
		</div>
		<form action="" >
		<table class="table table-bordered" data-toggle="table" data-click-to-select="true" data-pagination="true" data-page-list="[10, 20, 30, 40]" data-search="true" class="table-hover table-responsive" id="tableRoomList">
			<thead>
				<tr>
					<th>No.</th>
					<th>ESCUELA</th>
					<th>TRAMITES</th>
					<th>RETRO</th>
					<th>COSTO</th>
					<th>TOTAL</th>
                    <th>FECHA_ING</th>
					<th>CUENTA</th>
					<th>RESTANTE</th>
					
				</tr>
			</thead>
			<tbody>
				<?php foreach($escuelas as $escuela){ ?>
				<tr>
					<td><?php echo $i; $i++; ?></td>
					<td><?php echo $escuela->sigla_escuela?></td>
					<td><?php echo $escuela->tramites ?></td>
					<td><?php echo $escuela->retro?></td>
					<td><?php echo $escuela->costo ?></td>
					<td><?php echo $escuela->total ?></td>
                    <td><?php echo $escuela->fecha_ingreso?></td>
					<td><?php echo $escuela->cuenta ?></td>
					<td><?php echo $escuela->restante ?></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</form>
	</div>
	
	</body>
</html>