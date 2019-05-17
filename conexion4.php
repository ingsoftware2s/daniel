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
$pregunta1=$_GET['interesante'];
$pregunta2=$_GET['aumentar'];
$pregunta3=$_GET['letras'];
$pregunta4=$_GET['interfaz'];
$pregunta5=$_GET['navegacion'];
$pregunta6=$_GET['comentarios'];

$sql="INSERT INTO encuesta VALUES(' ','$pregunta1','$pregunta2','$pregunta3','$pregunta4','$pregunta5','$pregunta6')";
$ejecutar=mysql_query($sql);

if(!$ejecutar){
	echo "hubo un error";
}else{
	include ("p10.php");
}
?>