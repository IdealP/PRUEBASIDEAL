<!DOCTYPE html>
<html lang="en">
  
<head>
    <title>Alta - Alumno</title>
    <style>#resultado {
    background-color: red;
    color: white;
    font-weight: bold;
    }
    #resultado.ok {
        background-color: green;
    }
    </style>
    </head>
  
<body>
    <center>
        <h1>Alta Alumnos</h1>
  
        <form action="insertcnD.php" method="post">
              
              
<p>
                <label for="apellidoPaterno">Apellido P:</label>
                <input type="text" name="ap_pa" id="apellidoPaterno">
            </p>
           
<p>
                <label for="apellidoMaterno">Apellido M:</label>
                <input type="text" name="ap_ma" id="apellidoMaterno">
            </p>
              
<p>
                <label for="Nombre">Nombre:</label>
                <input type="text" name="nombre" id="Nombre">
            </p>
               
<p>
                <label for="Curp">CURP:</label>
                <input type="text" oninput="validarInput(this)" name="curp" id="Curp">
                <pre id="resultado"></pre>
            </p>

            <p>
                <label for="Genero">Genero:</label>
                <input type="text" name="genero" id="Genero">
            </p>
           
<p>
                <label for="fNac">Fecha Nacimiento:</label>
                <input type="date" name="fec_nac" id="fNac">
            </p>
              
<p>
                <label for="Edad">Edad:</label>
                <input type="text" name="edad" id="Edad">
            </p>

            <p>
                <label for="fCert">Fecha Certificado:</label>
                <input type="date" name="fec_cert" id="fCert">
            </p>
           
<p>
                <label for="Nivel">Nivel:</label>
                <input type="text" name="nivel" id="Nivel" value="Secundaria">
            </p>
              
<p>
                <label for="Cuatrimestre">Cuatrimestre:</label>
                <select name="cuatrimestre"  id="Cuatrimestre" >
                    <option value=" ">Selecciona</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </p>
               
<p>
                <label for="fReg">Fecha Registro:</label>
                <input type="date" name="fec_reg" id="fReg">
            </p>

            <p>
                <label for="nApp">No Aplicación:</label>
                <select name="no_app"  id="nApp">
                    <option value=" ">Selecciona</option>
                    <option value="EU-SEP 32">EU-SEP 32</option>
                    <option value=" ">---</option>
                    <option value=" ">---</option>
                    <option value=" ">---</option>
                </select>
            </p>
           
<p>
                <label for="Matricula">Matricula:</label>
                <input type="text" name="matricula" id="Matricula">
            </p>
              
<p>
    <label for="Especial">Especial o Retroactivo:</label>
                <select name="especial"  id="Especial">
                    <option value=" ">Selecciona</option>
                    <option value="Especial">Especial</option>
                    <option value="Retroactivo">Retroactivo</option>
                </select>
            </p>
               
<p>
                <label for="cTecnica">Carrera Técnica:</label>
                <select name="car_tec"  id="cTecnica">
                    <option value=" ">Selecciona</option>
                    <option value="Trabajo Social">Trabajo Social</option>
                    <option value="Programación">Programación</option>
                    <option value="Puericultura">Puericultura</option>
                    <option value="Contabilidad">Contabilidad</option>
                </select>
            </p>

            <p>
                <label for="Promedio">Promedio:</label>
                <input type="number" name="promedio" id="Promedio" step="any">
            </p>
           
<p>
                <label for="Constancia">Constancia de:</label>
                <select name="constancia" id="Constancia">
                    <option value=" ">Selecciona</option>
                     <option value="SI">SI</option>
                    <option value="NO">NO</option>
                </select>
            </p>
              
<p>
                <label for="Estatus">Estatus:</label>
                <select name="estatus" id="Estatus">
                    <option value=" ">Selecciona</option>
                     <option value="1">POR CERTIFICAR</option>
                </select>
            </p>
               
<p>
                <label for="Generacion">Generación:</label>
                <select name="generacion" id="Generacion">
                    <option value=" ">Selecciona</option>
                    <option value="2013-2016 - Retroactivo">2013-2016 - Retroactivo</option>
                    <option value="2016-2019">2016-2019</option>
                    <option value="2017-2020">2017-2020</option>
                    <option value="2018-2020">2018-2020</option>
                    <option value="2019-2021">2019-2021</option>
                </select>
            </p>

<p>
                <label for="Responsable">Responsable:</label>
                <input type="text" name="responsable" id="Responsable" >
            </p>

<p>
                <label for="acta">Acta de Nacimiento Certificada:</label>
                 <input type="file" name="acta" id="Acta" accept=".pdf" >                        
            </p>

<p>
                <label for="csec">Certificado de Secundaria:</label>
                 <input type="file" name="csec" id="Csec" accept=".pdf" >                        
            </p>

<p>
                <label for="curpd">CURP:</label>
                 <input type="file" name="curpd" id="Curpd" accept=".pdf" >                        
            </p>

<p>
                <label for="todos">Todos los Documentos:</label>
                 <input type="file" name="todos" id="Todos" accept=".pdf" >                        
            </p>

            <input type="submit" value="Submit">
        </form>
    </center>

    <script>
       //Función para validar una CURP
    function curpValida(curp) {
    var re = /^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/,
        validado = curp.match(re);
	
    if (!validado)  //Coincide con el formato general?
    	return false;
    
    //Validar que coincida el dígito verificador
    function digitoVerificador(curp17) {
        //Fuente https://consultas.curp.gob.mx/CurpSP/
        var diccionario  = "0123456789ABCDEFGHIJKLMNÑOPQRSTUVWXYZ",
            lngSuma      = 0.0,
            lngDigito    = 0.0;
        for(var i=0; i<17; i++)
            lngSuma = lngSuma + diccionario.indexOf(curp17.charAt(i)) * (18 - i);
        lngDigito = 10 - lngSuma % 10;
        if (lngDigito == 10) return 0;
        return lngDigito;
    }
  
    if (validado[2] != digitoVerificador(validado[1])) 
    	return false;
        
    return true; //Validado
}


//Handler para el evento cuando cambia el input
//Lleva la CURP a mayúsculas para validarlo
function validarInput(input) {
    var curp = input.value.toUpperCase(),
        resultado = document.getElementById("resultado"),
        valido = "No válido";
        
    if (curpValida(curp)) { //  se comprueba
    	valido = "Válido";
        resultado.classList.add("ok");
    } else {
    	resultado.classList.remove("ok");
    }
        
    resultado.innerText = "CURP: " + curp + "\nFormato: " + valido;
}
   
    </script>
</body>
  
</html>