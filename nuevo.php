<?php
$i = 1; 
include_once "base.php";

$array_post = array();

foreach($_POST as $valor){
   array_push($array_post, $valor);
} 

echo 'Asi quedaria el arreglo de las filas seleccionadas: <br>';
print_r($array_post);
echo '<hr>';

/*Crear el IN para el sql */
$ids_Pedidos = '';

foreach ($array_post[0] as $alumno){
	
	$ids_Pedidos = $ids_Pedidos."'".$alumno."'," ;
}
 
 $ids_Pedidos = substr($ids_Pedidos, 0, -1); //uitar ultima coma
/* 
echo 'Debo hacer la consulta a la base de datos para sacar las ID que se seleccionaron anteriormente <br>';
echo  ' la consulta seria: <br><br>';
 */
$CONSULTA = 'SELECT * FROM registro_alu WHERE matricula IN ('.$ids_Pedidos.');';

	
/* LLENAR LA TABLA NORMAL CON EL RESULTADO DE LA CONSULTA ANTERIOR*/

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
		<table class="table table-bordered" data-toggle="table" data-click-to-select="true" data-pagination="true" data-page-list="[10, 20, 30, 40]" data-search="true" class="table-hover table-responsive" id="tableRoomList">
			<thead>
				<tr>
					<th>No.</th>
					<th>NOMBRE COMPLETO</th>
					<th>CURP</th>
					<th>NIVEL</th>
					<th>PROMEDIO</th>
					<th>GENERACIÓN</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($array_post as $alumno){ ?>
				
                    <tr>
					<td><?php echo $i; $i++; ?></td>
					<td><?php echo $alumno->ap_pa , " " , $alumno->ap_ma, " " ,$alumno->nombre ?></td>
					<td><?php echo $alumno->curp ?></td>
					<td><?php echo $alumno->nivel ?></td>
					<td><?php echo $alumno->promedio ?></td>
					<td><?php echo $alumno->generacion ?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

	</body>
</html>


