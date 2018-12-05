<?php 
/**
 * @brief Elimina el registro de un usuario
 * @param nmas recibe el nombre del usuario a eliminar
 */
$nmas=($_GET['variable1']);
$conn=mysqli_connect("localhost", "root", "privada", "SalvandoVidas");
$sql="call bajaPac ('$nmas')";
echo $sql;
$result=mysqli_query($conn,$sql);
mysqli_close($conn);
echo $nmas;
?>