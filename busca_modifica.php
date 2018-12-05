<!DOCTYPE html>
<html lang="en">
<head>
  <title>Buscar Paciente</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="fuentes.css">
  <link rel="stylesheet" href="apoyos.css">

</head>

<body class="back bariol"  bgcolor="#FCFDFE" >

<div class="margen">
  <nav class="navbar navbar-expand-sm bg-success navbar-dark">
  <!-- Brand/logo -->
  <a class=" nav-link" href="inicio.php"><img src="Logo_SalvandoVidas.png" alt="SV" style="width:25px;height:25px;"></a>
  <!-- Link a inicio -->
  <a class="nav-link " href="" style="color: white ">Dr. 
    <?php session_start(); 
    echo $_SESSION["nombre"]; /** presenta nombre de doctor*/
    ?></a>
  </nav>
</div>
<div style="margin-left:5em;margin-right: 5em;margin-top: 1em">
  <h1 >Busqueda de Paciente</h1>
</div>
<form  method="POST" action="lista_modifica.php">
  <div style="margin-left:5em;margin-right: 5em;margin-top: 1em">
   <input type="text" class="form-control col-sm-6"  placeholder="Ingrese Apellido Paterno" name="paterno" required/>
    <input type="submit" align="left" class="btn btn-success" style="margin-top: 1em" value="Buscar" />
  </div>
</form>
</body>
</html>