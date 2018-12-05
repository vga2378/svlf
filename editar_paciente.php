<?php 
/**
 * @brief Muestra los datos para editar a un paciente
 * @param fila guarda el valor de cada query y lo desgloza para su impresion
 */
$conn=mysqli_connect("localhost", "root", "privada", "SalvandoVidas");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Editar Paciente</title>

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
  <a class="nav-link " href="" style="color: white ">Dr. <?php session_start(); echo $_SESSION["nombre"]; ?></a>
  </nav>
</div>
<div style="margin-left:5em;margin-right: 5em;margin-top: 1em">
  <h1 >Editar Paciente</h1>
</div>
<div class="row" style="margin-left:5em;margin-right: 5em;margin-top: 1em" >
  <div class="col-sm-4" align="center"><h5>Nombre(s):</h5></div>
  <input type="text" class="form-control col-sm-4"  placeholder="Ingresa Nombre" name="nombre" required/>
</div>
<div class="row" style="margin-left:5em;margin-right: 5em;margin-top: 1em" >
  <div class="col-sm-4" align="center"><h5>Apellido Paterno:</h5></div>
  <input type="text" class="form-control col-sm-4"  placeholder="Ingresa Apellido" name="nombre" required/>
</div>
<div class="row" style="margin-left:5em;margin-right: 5em;margin-top: 1em" >
  <div class="col-sm-4" align="center"><h5>Apellido Materno:</h5></div>
  <input type="text" class="form-control col-sm-4"  placeholder="Ingresa Apellido" name="nombre" required/>
</div>
<div class="row" style="margin-left:5em;margin-right: 5em;margin-top: 1em" >
  <div class="col-sm-4" align="center"><h5>Peso:</h5></div>
  <input type="text" class="form-control col-sm-4"  placeholder="Ingresa Peso" name="nombre" required/>
</div>
<div class="row" style="margin-left:5em;margin-right: 5em;margin-top: 1em" >
  <div class="col-sm-4" align="center"><h5>Talla:</h5></div>
  <input type="text" class="form-control col-sm-4"  placeholder="Ingresa Talla" name="nombre" required/>
</div>
<div class="row" style="margin-left:5em;margin-right: 5em;margin-top: 1em" >
  <div class="col-sm-4" align="center"><h5>Sexo:</h5></div>
  <input type="text" class="form-control col-sm-4"  placeholder="Ingresa Sexo" name="nombre" required/>
</div>
<div class="row" style="margin-left:5em;margin-right: 5em;margin-top: 1em" >
  <div class="col-sm-4" align="center"><h5>Edad:</h5></div>
  <input type="text" class="form-control col-sm-4"  placeholder="Ingresa Edad" name="nombre" required/>
</div>
<div class="row" style="margin-left:5em;margin-right: 5em;margin-top: 1em" >
  <div class="col-sm-4" align="center"><h5>RFC:</h5></div>
  <input type="text" class="form-control col-sm-4"  placeholder="Ingresa RFC" name="nombre" required/>
</div>
<div class="row" style="margin-left:5em;margin-right: 5em;margin-top: 1em" >
  <div class="col-sm-4" align="center"><h5>Ocupación:</h5></div>
  <input type="text" class="form-control col-sm-4"  placeholder="Ingresa Ocupación" name="nombre" required/>
</div>

  <div style="margin-left:5em;margin-right: 5em;margin-top: 1em"> 
      <input type="submit" align="left" class="btn btn-success" style="margin-top: 1.5em" value="Atras"/>
      <input type="submit" align="right" class="btn btn-success" style="margin-top: 1.5em" value="Guardar"/>
</div>
</body>
</html>