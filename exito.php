<!DOCTYPE html>
<html lang="en">
<head>
  <title>EXITO!</title>

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
    <?php session_start(); 
    echo $_SESSION["nombre"]; /** presenta nombre de doctor*/
    ?></a>
  </nav>
</div>
<div class="centrado-porcentual">
  <div class="text-center" >
    <font size=6>Acción exitosa</font>
  </div>
  <div class="text-center">
    <a type="button" href="inicio.php" class="btn btn-success" > Inicio</a>
  </div>
  <div align=center >
</body>
</html>