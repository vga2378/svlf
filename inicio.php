<!DOCTYPE html>
<html lang="en">
<head>
  <title>Inicio</title>
  
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
  <a class=" nav-link" href="inicio.html"><img src="Logo_SalvandoVidas.png" alt="SV" style="width:25px;height:25px;"></a>
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item ini">
      <a class="nav-link " href="alta.php" style="color: white ">Dar de Alta</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="busca_baja.php" style="color: white">Dar de Baja</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="busca_modifica.php" style="color: white">Editar</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="busca.php" style="color: white">Buscar</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="percance.php" style="color: white">Percance</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="login.html" style="color: white">Salir</a>
    </li>
  </ul>
  </nav>
</div>
<div class="centrado-porcentual">
  <div class="text-center" >
    <font size=7>Salvando Vidas</font>
  </div>
  <div align=center >
    <img  class="img-fluid" src="Logo_SalvandoVidas.png" alt="SV2" style="width:100px;height:100px;">
  </div>
  <div>

    <h2 class="text-center" style="color:#58D3F7">Bienvenido Dr. 
      <?php session_start();
       echo $_SESSION["nombre"]; /** presenta nombre de doctor*/

       ?></h2>
  </div>
</div>
</body>
</html>