<?php session_start();
/**
 * @brief Valida los datos de inicio de sesion
 */
$a=utf8_decode($_POST["usu"]); /** recibe usuario*/
$b='"'.utf8_decode($_POST["pswd"]).'"';/** recibe contraseña*/

$conn=mysqli_connect("localhost", "acces", "01acces", "SalvandoVidas");/** datos para la conexion*/
$sql="call login ($a,$b)";/** query a realizar*/

if($result=mysqli_query($conn,$sql)){
	$fila=mysqli_fetch_row($result);/** guarda resultados de query*/
	mysqli_close($conn);
	if($fila[1]=="medico"){ /** busca nombre de medico*/
		$sql="call getMed ($a)";
		$_SESSION["tipo"]=$fila[1];
		$_SESSION["contraseña"]=$fila[2];
		$conn=mysqli_connect("localhost", "acces", "01acces", "SalvandoVidas");
		if($result=mysqli_query($conn,$sql))
			$fila2=mysqli_fetch_row($result);
		$_SESSION["nombre"]=$fila2[3];
		mysqli_close($conn);
		header("Location:inicio.php");
	}
	elseif($fila[2]=="administrador"){}
	
}
else{
	}
?>