<html>
<head>
    <title>formulario</title>
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
    <link rel="stylesheet" href="sty.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<header>
<section id = "menu">
<ul>
<a href="p8.php">Inicio</a>
<a href="p9.php">Juegos</a>
<a href="p10.php">Encuesta</a>
<a href="p11.php">Formulario</a>
<a href="p12.php">Informacion</a>
<a href="p1.php">salir</a>
</ul>
</section>
</header>
<form action="conexion4.php" method="get">
<div id="contenedor">
<h5>Encuesta Pagina Web</h5>
<h3>¿Te parecio interesante la pagina web?</h3><br>
<input type="radio" name="interesante" value="si"><label>Si</label>
<input type="radio" name="interesante" value="no"><label>NO</label>
<br>
<br>
<h3>¿Que deberia aumentar en la pagina web?</h3><br>
<input type="checkbox" name="aumentar" value="Imagenes"><label>Imagenes</label>
<input type="checkbox" name="aumentar" value="Videos"><label>Videos</label>
<input type="checkbox" name="aumentar" value="Informacion"><label>Informacion </label>
<br>
<br>
<br>
<h3>¿El tipo de letra utilizado, así como el tamaño de la misma, ¿crees que son los adecuados?</h3><br>
<select name="letras">
<option>Muy de acuerdo</option>
<option>De acuerdo</option>
<option>Indiferente</option>
<option>En desacuerdo</option>
<option>Muy en desacuerdo</option>
</select>
<br>
<br>
<h3>¿Consideras que el diseño de la interfaz: estructura, organización, etc., de la página web son adecuados?</h3><br>
<input type="radio" name="interfaz" value="Si"><label>Si</label>
<input type="radio" name="interfaz" value="NO"><label>NO</label>
<br>
<br>
<h3>¿Consideras que el diseño de la interfaz: accesibilidad, navegación, etc., de la página web son adecuados?</h3><br>
<input type="radio" name="navegacion" value="Si"><label>Si</label>
<input type="radio" name="navegacion" value="NO"><label>NO</label>
<br>
<br>
<h3>¿Que deberia implementar la pagina web?</h3><br>
<textarea name="comentarios" rows="5" cols="50"></textarea>
<br>
<br>
<input type="submit" value="Enviar"/>
<br>

</div>
</html>



