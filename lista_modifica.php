<?php 
session_start();
$conn=mysqli_connect("localhost", $_SESSION["tipo"], $_SESSION["contraseña"], "SalvandoVidas");
$paterno=utf8_decode($_POST["paterno"]);
$sql="call busPacBapp('$paterno')";
$result=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Modificar Paciente</title>

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
  <h1 >Pacientes encontrados</h1>
  <table class="table">
    <thead class="thead-dark" >
      <tr>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Edad</th>
        <th>Sexo</th>
        <th>Editar</th>
      </tr>
    </thead>
    <tbody>
      <?php
      while($fila=mysqli_fetch_row($result)){?>
        <tr>
        <td><?php echo $fila[2]?></td>
        <td><?php echo $fila[0]?></td>
        <td><?php echo $fila[1]?></td>
        <td><?php echo $fila[7]?></td>
        <td><?php echo $fila[6]?></td>
        <td><a href="modifica.php?variable1=<?php echo $fila[3] ?>" type="button" class="btn btn-outline-success" name="">Editar</a></td>
      </tr>
    <?php }
    mysqli_close($conn);?>
    </tbody>
</div>
</body>
</html>