<!DOCTYPE html>
<html>
  
<head>
    <title>Datos Insertados</title>
</head>
  
<body>
    <center>
        <?php
  
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "ideal");
    
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $ap_pa =  $_REQUEST['ap_pa'];
        $ap_ma = $_REQUEST['ap_ma'];
        $nombre =  $_REQUEST['nombre'];
        $curp = $_REQUEST['curp'];
        $genero = $_REQUEST['genero'];
        $fec_nac =  $_REQUEST['fec_nac'];
        $edad = $_REQUEST['edad'];
        $fec_cert = $_REQUEST['fec_cert'];
        $nivel =  $_REQUEST['nivel'];
        $cuatrimestre = $_REQUEST['cuatrimestre'];
        $fec_reg = $_REQUEST['fec_reg'];
        $no_app =  $_REQUEST['no_app'];
        $matricula = $_REQUEST['matricula'];
        $especial = $_REQUEST['especial'];
        $car_tec =  $_REQUEST['car_tec'];
        $promedio = $_REQUEST['promedio'];
        $constancia = $_REQUEST['constancia'];
        $estatus =  $_REQUEST['estatus'];
        $generacion = $_REQUEST['generacion'];
        $responsable = $_REQUEST['responsable'];
        $acta = $_REQUEST['acta'];
        $csec = $_REQUEST['csec'];
        $curpd = $_REQUEST['curpd'];
        $todos = $_REQUEST['todos'];
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO registro_alu  VALUES ('$matricula','$ap_pa', 
            '$ap_ma','$nombre','$curp','$genero', 
            '$fec_nac','$edad','$fec_cert','$nivel', 
            '$cuatrimestre','$fec_reg','$no_app',
            '$especial','$car_tec','$promedio','$constancia', 
            '$estatus','$generacion','$responsable', '$acta',
            '$csec','$curpd','$todos')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>Registro agregado exitosamente</h3>"; 
  
            echo nl2br("\n$matricula\n $ap_pa\n "
                . "$ap_ma\n $nombre\n $curp\n"
                . "$genero\n $fec_nac\n $edad"
                . "$fec_cert\n $nivel\n $cuatrimestre"
                . "$fec_reg\n $no_app\n $especial\n"
                . "$car_tec\n $promedio\n $constancia\n"
                . "$estatus\n $generacion\n  $responsable\n $acta\n" 
                . "$csec\n $curpd\n $todos\n ");
        } else{
            echo "ERROR: Lo sentimos, intentalo de nuevo. $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
  
</html>