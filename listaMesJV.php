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
	<div class="container">
		<div class="row">
			
	<div class="col-xs-12">
	<nav class="navbar navbar-light navbar-fixed-top">
		<div class="container">
		<ul class="nav nav-tabs">
	<li class="nav-item">
		<a class="nav-link" href="listaMesJV.php">JOS VAS</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="listaMesCPM.php">CEEPAM</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="listaMesPÑ.php">PIÑON</a>
	</li>
	</ul>
		</div>
	</nav>
    <br><br>
		<h1>CONTROL DE PAGOS MENSUAL - CERTIFICADOS JOS VAS</h1>
		<div>
			<a class="btn btn-warning" href="">Cambiar Costo<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
			<path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
			</svg></a>
			<a class="btn btn-primary" href="listaMesJVAntiC.php">Anticipos<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
			<path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
		    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
			</svg></a>
			<a class="btn btn-success" href="ListaMesJVControl.php">Control<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-spreadsheet-fill" viewBox="0 0 16 16">
			<path d="M6 12v-2h3v2H6z"/>
			<path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM3 9h10v1h-3v2h3v1h-3v2H9v-2H6v2H5v-2H3v-1h2v-2H3V9z"/>
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
					<th>RESTANTE</th>
					<th>EDITAR</th>
					
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
					<td><?php echo $escuela->restante ?></td>
					<td><a class="btn btn-warning" href="<?php echo "editarM.php?nombre_escuela=" . $escuela->nombre_escuela?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
					<path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
					</svg></a></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</form>
	</div>
	</body>
</html>