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
<a href="p1.php">Inicio</a>
<a href="p2.php">Campeones</a>
<a href="p3.php">Noticias</a>
<a href="p4.php">Foros</a>
<a href="p5.php">Comunidad</a>
<a href="p6.php">Tienda</a>
<a href="p7.php">Iniciar sesion</a>
</ul>
</section>
</header>
</body>
<body>
<form action="conexion.php" method="get">
<h4>Creacion de usuarios de league of legends</h4>
<table>
<tr>
<td>
<input type="text" name="usuarios" placeholder="Ingrese su nombre"/>
</tr>
</td>
<tr>
<td>
<input type="text" name="documento" placeholder="Ingrese su numero de documento"/>
</tr>
</td>
<tr>
<td>
<input type="text" name="edad" placeholder="Ingrese su edad"/>
</tr>
</td>
<tr>
<td>
<input type="text" name="nickname" placeholder="Ingrese su nickname"/>
</tr>
</td>
<tr>
<td>
<input type="email" name="correoelectronico" placeholder="Ingrese su correo electronico"/>
</tr>
</td>
<tr>
<td>
<input type="password" name="password" placeholder="Ingrese su contrase&ntilde;a"/>
</tr>
</td>
<tr>
<td>
<input type="submit" value="Crear usuario"/>
</tr>
</td>
</table>
</form> 
</body>
</html>