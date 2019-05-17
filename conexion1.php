<?php
$conectar=mysqli_connect("localhost","root","usbw","pagina") or
die("Problemas con la conexión");

$registros=mysqli_query($conectar ,"select * from c_usuario where nick='$_REQUEST[nickname]'") or
die("Problemas en el select:".mysqli_error($conectar));
if($reg=mysqli_fetch_array($registros))
{
	include ('conexion2.php');
}
else{
	echo "error de usuario";
}
?>