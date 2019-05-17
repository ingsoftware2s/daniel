<?php
$registros=mysqli_query($conectar ,"select * from c_usuario where clave='$_REQUEST[password]'") or
die("Problemas en el select:".mysqli_error($conectar));
if($reg=mysqli_fetch_array($registros))
{
	include ('p8.php');
}
else{
	echo "error de contraseña";
}
?>