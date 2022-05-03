<?php
$i = 1; 
include_once "base.php";
$sentencia = $base_de_datos->query("SELECT matricula,ap_pa,ap_ma,nombre,curp,nivel,promedio,generacion FROM registro_alu;");
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
	<div class="container">
		<div class="row">
			
	<div class="col-xs-12">
		<h1>LISTA DE ALUMNOS</h1>
		<form action="nuevo.php" method="post">
		<table class="table table-bordered" data-toggle="table" data-click-to-select="true" data-pagination="true" data-page-list="[10, 20, 30, 40]" data-search="true" class="table-hover table-responsive" id="tableRoomList">
			<thead>
				<tr>
					<th>No.</th>
					<th>NOMBRE COMPLETO</th>
					<th>CURP</th>
					<th>NIVEL</th>
					<th>PROMEDIO</th>
					<th>GENERACIÓN</th>
					<th data-field="state" data-checkbox="true" id="check" name="algo[]" ></th>
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
					<td data-field="state" data-checkbox="false" id="check" name="algo[]" value="<?php echo utf8_encode($alumno->matricula);?>" ></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		<div class="d-grid gap-2">
		<input type="submit" name="enviar" value="Aceptar" class="btn btn-success"  onclick="Ejecutar();" id="btn-refill" />
  		<!--- <button class="btn btn-success" type="button"  id="btn-refill"  onclick="Ejecutar();" name="enviar">Aceptar</button> --->
	</div>
	</form>
	</div>
	<script>
$(function() {
  var $table = $('#tableRoomList');
  $table.on('check.bs.table', toggleBtn);
  $table.on('uncheck.bs.table', toggleBtn);
  $table.on('check-all.bs.table', toggleBtn);
  $table.on('uncheck-all.bs.table', toggleBtn);
  toggleBtn();

  //

  function toggleBtn() {
    var rows = $table.bootstrapTable('getSelections');
    $('#btn-refill').prop('disabled', rows.length === 0);
  }

});
</script>
	</body>
</html>