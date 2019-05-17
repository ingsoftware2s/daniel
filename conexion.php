<?php
$conectar=mysql_connect('localhost','root','usbw');
if(!$conectar){
	echo "no se pudo conectar con el servidor";
}else{
	$base=mysql_select_db('pagina');
	if(!$base){
		echo "no se encontro la base de datos";
}
}

$nombre=$_GET['usuarios'];
$documento=$_GET['documento'];
$edad=$_GET['edad'];
$nick=$_GET['nickname'];
$correo=$_GET['correoelectronico'];
$clave=$_GET['password'];

$req=(strlen($nombre)*strlen($documento)*strlen($edad)*strlen($nick)*strlen($correo)*strlen($clave)) or die("no se llenaron todos los dato");
$clave=md5('$password');

$sql="INSERT INTO c_usuario VALUES(' ','$nombre','$documento','$edad','$nick','$correo','$clave')";
$ejecutar=mysql_query($sql);

if(!$ejecutar){
	echo "hubo un error";
}else{
	include ("p7.php");
}

?>