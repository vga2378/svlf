<?php session_start();
/**
 * @brief Crea un nuevo paciente
 */
/** recibe nombre*/
$nombre=utf8_decode($_POST["nombre"]);
/** recibe apellido paterno*/
$paterno=utf8_decode($_POST["paterno"]);
/** recibe apellido materno*/
$materno=utf8_decode($_POST["materno"]);
/** recibe peso*/
$peso=utf8_decode($_POST["peso"]);
/** recibe talla*/
$talla=utf8_decode($_POST["talla"]);
/** recibe sexo*/
$sexo=utf8_decode($_POST["sexo"]);
/** recibe edad*/
$edad=utf8_decode($_POST["edad"]);
/** recibe rfc*/
$rfc=utf8_decode($_POST["rfc"]);
 /** recibe alergias*/
$alergias=utf8_decode($_POST["alergias"]);
/** recibe ocupacion*/
$ocupacion=utf8_decode($_POST["ocupacion"]);
/** recibe historial patologico*/
$pato=utf8_decode($_POST["si_pato"]);
/** recibe historial no patologico*/
$npato=utf8_decode($_POST["no_pato"]);
/** recibe antecedentes familiares*/
$familiares=utf8_decode($_POST["familiares"]);
/** recibe informacion gineco-obstetra*/
$gineco=utf8_decode($_POST["gineco"]);
/** recibe informacion de explotacion fisica*/
$fisica=utf8_decode($_POST["fisica"]);
/** query para hacer el registro*/ 
$sql="CALL updPac('$nombre', '$paterno', '$materno', '$rfc', $peso, $talla, '$sexo', $edad,'$ocupacion', '$npato', '$pato', '$familiares', '$gineco', '$fisica', '$alergias', '$_SESSION["id"]')"; 
if($_SESSION["tipo"]=="medico"||$_SESSION["tipo"]=="administrador"){
	$conn=mysqli_connect("localhost", $_SESSION["tipo"], $_SESSION["contraseña"], "SalvandoVidas");
if($result=mysqli_query($conn,$sql)){
	header("Location:exito.php");
}/** se realiza la conexion*/
}
?>