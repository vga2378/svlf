<?php 
session_start();
/**
 * @brief Pantalla para la eliminacion de un usuario
 * @param nmas recibe el nombre del usuario a eliminar
 */
$nmas=($_GET['variable1']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Eliminar Paciente</title>

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
    <?php
    echo $_SESSION["nombre"]; /** presenta nombre de doctor*/
    ?></a>
  </nav>
</div>
<div style="margin-left:5em;margin-right: 5em;margin-top: 1em">
  <h1 >Eliminar Paciente</h1>
  <div><h1 align=center style="margin-top: 3em">¿Estás seguro de eliminar el registro?</h1></div>
  <div align=center style="margin-top: 1.5em">
    <a href="epaciente.php?variable1=<?php echo $nmas ?>" type="button" class="btn btn-success" style="margin-bottom: 1.5em">Si</a>
    <a href="inicio.php" type="button" class="btn btn-success" style="margin-left: 1.5em; margin-bottom: 1.5em">No</a>
    <?php ?>
</div>
</body>
</html>