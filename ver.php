<?php 
session_start();
/**
 * @brief Pantalla para la eliminacion de un usuario
 * @param nmas recibe el nombre del usuario a eliminar
 */
$nmas=($_GET['variable1']);
$conn=mysqli_connect("localhost", $_SESSION["tipo"], $_SESSION["contraseña"], "SalvandoVidas");
$sql="call busPacArfc('$nmas')";
$result=mysqli_query($conn,$sql);
$fila=mysqli_fetch_row($result);
$_SESSION["id"]=$fila[15];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ver Paciente</title>

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
  <!-- Links -->
  <a class="nav-link " href="" style="color: white ">Dr. 
    <?php  
    echo $_SESSION["nombre"]; /** presenta nombre de doctor*/
    ?></a>
  </nav>
</div>
<!-- Formulario de Paciente -->
<div style="margin-left:5em;margin-right: 5em;margin-top: 1em">
  <h1 >Modificar Paciente</h1>
</div>
<!-- Nombre -->
<div class="row" style="margin-left:5em;margin-right: 5em;margin-top: 1em" >
  <div class="col-sm-4" align="center"><h5>Nombre(s):</h5></div>
  <div class="col-sm-4" align="center"><h4><?php echo $fila[0] ?></h4></div>
</div>
<div class="row" style="margin-left:5em;margin-right: 5em;margin-top: 1em" >
  <div class="col-sm-4" align="center"><h5>Apellido Paterno:</h5></div>
  <div class="col-sm-4" align="center"><h4><?php echo $fila[1] ?></h4></div>
</div>
<div class="row" style="margin-left:5em;margin-right: 5em;margin-top: 1em" >
  <div class="col-sm-4" align="center"><h5>Apellido Materno:</h5></div>
  <div class="col-sm-4" align="center"><h4><?php echo $fila[2] ?></h4></div>
</div>
<div class="row" style="margin-left:5em;margin-right: 5em;margin-top: 1em" >
  <div class="col-sm-4" align="center"><h5>Peso:</h5></div>
  <div class="col-sm-4" align="center"><h4><?php echo $fila[4] ?></h4></div>
</div>
<div class="row" style="margin-left:5em;margin-right: 5em;margin-top: 1em" >
  <div class="col-sm-4" align="center"><h5>Talla:</h5></div>
  <div class="col-sm-4" align="center"><h4><?php echo $fila[5] ?></h4></div>
</div>
<div class="row" style="margin-left:5em;margin-right: 5em;margin-top: 1em" >
  <div class="col-sm-4" align="center"><h5>Sexo:</h5></div>
  <div class="col-sm-4" align="center"><h4><?php echo $fila[6] ?></h4></div>
</div>
<div class="row" style="margin-left:5em;margin-right: 5em;margin-top: 1em" >
  <div class="col-sm-4" align="center"><h5>Edad:</h5></div>
  <div class="col-sm-4" align="center"><h4><?php echo $fila[7] ?></h4></div>
</div>
<div class="row" style="margin-left:5em;margin-right: 5em;margin-top: 1em" >
  <div class="col-sm-4" align="center"><h5>RFC:</h5></div>
  <div class="col-sm-4" align="center"><h4><?php echo $fila[3] ?></h4></div>
</div>
<div class="row" style="margin-left:5em;margin-right: 5em;margin-top: 1em" >
  <div class="col-sm-4" align="center"><h5>Alergias:</h5></div>
  <div class="col-sm-4" align="center"><h4><?php echo $fila[14] ?></h4></div>
</div>
<div class="row" style="margin-left:5em;margin-right: 5em;margin-top: 1em" >
  <div class="col-sm-4" align="center"><h5>Ocupación:</h5></div>
  <div class="col-sm-4" align="center"><h4><?php echo $fila[8] ?></h4></div>
</div>
<div class="col-sm-4" align="center" style="margin-left:5em;margin-right: 5em;margin-top: 1em" >
  <h5>Antecedentes Personales Patologicos:</h5></div>
<div class="col-sm-4" align="center"><h4><?php echo $fila[10] ?></h4></div>
  <div class="col-sm-4" align="center" style="margin-left:5em;margin-right: 5em;margin-top: 1em" >
  <h5>Antecedentes Personales No Patologicos:</h5></div>
<div class="col-sm-4" align="center"><h4><?php echo $fila[9] ?></h4></div>
  <div class="col-sm-4" align="center" style="margin-left:5em;margin-right: 5em;margin-top: 1em" >
  <h5>Antecedentes Personales Familiares:</h5></div>
<div class="col-sm-4" align="center"><h4><?php echo $fila[11] ?></h4></div>
  <div class="col-sm-4" align="center" style="margin-left:5em;margin-right: 5em;margin-top: 1em" >
  <h5>Antecedentes Personales Gineco-Obstetricos:</h5></div>
<div class="col-sm-4" align="center"><h4><?php echo $fila[12] ?></h4></div>
  <div class="col-sm-4" align="center" style="margin-left:5em;margin-right: 5em;margin-top: 1em" >
  <h5>Exploración Fisica:</h5></div>
<div class="col-sm-4" align="center"><h4><?php echo $fila[13] ?></h4></div>
  <div style="margin-left:5em;margin-right: 5em;margin-top: 1em"> 
      <input type="submit" align="right" class="btn btn-success" href="inicio.php" style="margin-top: 1.5em" value="Guardar"/>
</div>
</body>
</html>