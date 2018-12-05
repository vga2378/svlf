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
  <title>Alta de Paciente</title>

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
<form  method="POST" action="modificar_paciente.php">
<div class="row" style="margin-left:5em;margin-right: 5em;margin-top: 1em" >
  <div class="col-sm-4" align="center"><h5>Nombre(s):</h5></div>
  <input type="text" class="form-control col-sm-4"  placeholder="Ingresa Nombre" name="nombre" value="<?php echo $fila[0] ?>" required/>
</div>
<div class="row" style="margin-left:5em;margin-right: 5em;margin-top: 1em" >
  <div class="col-sm-4" align="center"><h5>Apellido Paterno:</h5></div>
  <input type="text" class="form-control col-sm-4"  placeholder="Ingresa Apellido" name="paterno" value="<?php echo $fila[1] ?>" required/>
</div>
<div class="row" style="margin-left:5em;margin-right: 5em;margin-top: 1em" >
  <div class="col-sm-4" align="center"><h5>Apellido Materno:</h5></div>
  <input type="text" class="form-control col-sm-4"  placeholder="Ingresa Apellido" name="materno" value="<?php echo $fila[2] ?>" required/>
</div>
<div class="row" style="margin-left:5em;margin-right: 5em;margin-top: 1em" >
  <div class="col-sm-4" align="center"><h5>Peso:</h5></div>
  <input type="text" class="form-control col-sm-4"  placeholder="Ingresa Peso" name="peso" value="<?php echo $fila[4] ?>" required/>
</div>
<div class="row" style="margin-left:5em;margin-right: 5em;margin-top: 1em" >
  <div class="col-sm-4" align="center"><h5>Talla:</h5></div>
  <input type="text" class="form-control col-sm-4"  placeholder="Ingresa Talla" name="talla" value="<?php echo $fila[5] ?>" required/>
</div>
<div class="row" style="margin-left:5em;margin-right: 5em;margin-top: 1em" >
  <div class="col-sm-4" align="center"><h5>Sexo:</h5></div>
  <input type="text" class="form-control col-sm-4"  placeholder="Ingresa Sexo" name="sexo" value="<?php echo $fila[6] ?>" required/>
</div>
<div class="row" style="margin-left:5em;margin-right: 5em;margin-top: 1em" >
  <div class="col-sm-4" align="center"><h5>Edad:</h5></div>
  <input type="text" class="form-control col-sm-4"  placeholder="Ingresa Edad" name="edad" value="<?php echo $fila[7] ?>"  required/>
</div>
<div class="row" style="margin-left:5em;margin-right: 5em;margin-top: 1em" >
  <div class="col-sm-4" align="center"><h5>RFC:</h5></div>
  <input type="text" class="form-control col-sm-4"  placeholder="Ingresa RFC" name="rfc" value="<?php echo $fila[3] ?>" required/>
</div>
<div class="row" style="margin-left:5em;margin-right: 5em;margin-top: 1em" >
  <div class="col-sm-4" align="center"><h5>Alergias:</h5></div>
  <input type="text" class="form-control col-sm-4"  placeholder="Ingresa Alergias" name="alergias" value="<?php echo $fila[14] ?>"  required/>
</div>
<div class="row" style="margin-left:5em;margin-right: 5em;margin-top: 1em" >
  <div class="col-sm-4" align="center"><h5>Ocupación:</h5></div>
  <input type="text" class="form-control col-sm-4"  placeholder="Ingresa Ocupación" name="ocupacion" value="<?php echo $fila[8] ?>" required/>
</div>
<div class="row" style="margin-left:5em;margin-right: 5em;margin-top: 1em" >
  <div class="col-sm-4" align="center"><h5>Motivo de visita:</h5></div>
  <input type="text" class="form-control col-sm-4"  placeholder="Ingresa Motivo de visita" name="motivo" required/>
</div>
<div class="col-sm-4" align="center" style="margin-left:5em;margin-right: 5em;margin-top: 1em" >
  <h5>Antecedentes Personales Patologicos:</h5></div>
<textarea class="form_control col-sm-6" name="si_pato" rows="4" cols="40"
  style="margin-left:10em;margin-right: 5em;margin-top: 1em">
  <?php echo $fila[10] ?>
  </textarea>
  <div class="col-sm-4" align="center" style="margin-left:5em;margin-right: 5em;margin-top: 1em" >
  <h5>Antecedentes Personales No Patologicos:</h5></div>
<textarea class="form_control col-sm-6" name="no_pato" rows="4" cols="40"
  style="margin-left:10em;margin-right: 5em;margin-top: 1em">
  <?php echo $fila[9] ?> 
  </textarea>
  <div class="col-sm-4" align="center" style="margin-left:5em;margin-right: 5em;margin-top: 1em" >
  <h5>Antecedentes Personales Familiares:</h5></div>
<textarea class="form_control col-sm-6" name="familiares" rows="4" cols="40"
  style="margin-left:10em;margin-right: 5em;margin-top: 1em">
  <?php echo $fila[11] ?> 
  </textarea>
  <div class="col-sm-4" align="center" style="margin-left:5em;margin-right: 5em;margin-top: 1em" >
  <h5>Antecedentes Personales Gineco-Obstetricos:</h5></div>
<textarea class="form_control col-sm-6" name="gineco" rows="4" cols="40"
  style="margin-left:10em;margin-right: 5em;margin-top: 1em">
  <?php echo $fila[12] ?>
  </textarea>
  <div class="col-sm-4" align="center" style="margin-left:5em;margin-right: 5em;margin-top: 1em" >
  <h5>Exploración Fisica:</h5></div>
<textarea class="form_control col-sm-6" name="fisica" rows="4" cols="40"
  style="margin-left:10em;margin-right: 5em;margin-top: 1em">
  <?php echo $fila[13] ?>
  </textarea>
  <div style="margin-left:5em;margin-right: 5em;margin-top: 1em"> 
      <input type="submit" align="right" class="btn btn-success" style="margin-top: 1.5em" value="Guardar"/>
</div>
</form>
</body>
</html>