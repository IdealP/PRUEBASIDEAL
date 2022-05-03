<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Control de Pagos Mensualidades</title>
</head>
<body>
        <div class="container">
		<div class="row">
	<div class="col-xs-12">
    <center>
    <br><br>
        <h1>Control de Pagos por Mes</h1>
            <br>
        <form action="verListas.php" method="post">
            <label for="mes">ELIGE EL MES</label>
            <br><br>
            <select class="form-select" name="mes" id="mes">
            <option selected>Selecciona</option>
            <option value="Enero">Enero</option>
            <option value="Febrero">Febrero</option>
            <option value="Marzo">Marzo</option>
            <option value="Abril">Abril</option>
            <option value="Mayo">Mayo</option>
            <option value="Junio">Junio</option>
            <option value="Julio">Julio</option>
            <option value="Agosto">Agosto</option>
            <option value="Septiembre">Septiembre</option>
            <option value="Octubre">Octubre</option>
            <option value="Noviembre">Noviembre</option>
            <option value="Diciembre">Diciembre</option>
            </select>
            <br>
            <div class="d-grid gap-2">
            <input class="btn btn-info" type="submit" name="submit" id="submit" value="Ver">
            <!-- <button class="btn btn-primary" type="button"  name="submit">Ver</button> -->
            </div>
        </form>
        </center>
	</div>
</body>
</html>