<?php
if(
	!isset($_POST["matricula"]) || 
	!isset($_POST["status"])  
) exit();


include_once "base.php";
$matricula = $_POST["matricula"];
$status = $_POST["status"];

$sentencia = $base_de_datos->prepare("UPDATE registro_alu SET matricula = ?, status = ?;");
$resultado = $sentencia->execute([$matricula,$estatus, $matricula]);

if($value['status']!="1"){
	echo'<td><button class="btn btn-danger btnprueba btn-xs">Por certificar</button></td>';
 }else if($value['status']!="2"){
	echo'<td><button class="btn  btnprueba btn-xs" style="background-color:#F66609;">En Tramite</button></td>';
 } else if($value['status']!="3"){
	echo'<td><button class="btn btn-warning btnprueba btn-xs">En Oficina</button></td>';
 }else if($value['status']!="4"){
	echo'<td><button class="btn btn-success btnprueba btn-xs">Listo</button></td>';
 }



?>

<!-- <script>
			if ($Operation == 'GuardarStatus') {
			$Values = $_POST['Values'];
			$val = explode(",", "$Values");
			$value = $val;
			$StuVal = array_chunk($value, 2)
			foreach ($StuVal as $v) {
				$Exist = $dStudent->dGetCertificationProcessConAss($v[0]);
				if (mysqli_num_rows($Exist) > 0) {
					$dStudent->dUpdCertificationProcessConAss($v[0], $v[1], $v[2]);
				} else {
					$dStudent->dNewCertificationProcessConAss($v[0], $v[1], $v[2]);
				}
				}
			}
		</script> -->