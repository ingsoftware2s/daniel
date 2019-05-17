<html>
<head>
    <title>formulario</title>
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
    <link rel="stylesheet" href="css.css">
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
</body>

<body>
<form action="conexion3.php" method="get">
<br>
<br>
<br>
<br>
<table>
<tr>
<td>
<input type="text" name="invocador" placeholder="Nombre de invocador"/>
</tr>
</td>
<tr>
<td>
<input type="text" name="champ" placeholder="Campeon favorito"/>
</tr>
</td>
<tr>
<td>
<input type="text" name="rol" placeholder="Rol favorito"/>
</tr>
</td>
<tr>
<td>
<input type="text" name="liga" placeholder="Liga actual"/>
</tr>
</td>
<tr>
<td>
<input type="submit" value="Guardar"/>
</tr>
</td>
</table>
</form>
</body>
</html>