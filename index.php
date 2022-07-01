<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>pagina de inicio</title>
	<style>
		h1{
			background:#1b2e58; /*color de fondo*/
			color:#a396fa;  /*color del texto*/
			border:solid 2px black;
			border-radius:5px;
			box-shadow:5px 5px 10px black;/*sombra*/
			font-family:ARIAL;/*tipo de letra*/
			text-align:center;/*lugar de letras*/
		}
		.menu{
			background:#E60044; /*color de fondo*/
			color:black;  /*color del texto*/
			text-decoration:none;  /*color del texto*/
			border:solid 2px black;
			border-radius:5px;
			box-shadow:5px 5px 10px black;/*sombra*/
			font-family:ARIAL;/*tipo de letra*/
			padding:10px;/*tipo de letra*/
			text-align:center;/*lugar de letras*/
		}
		.menu:hover{
			background: white;
			color:black;
			transition:0.4s;
		}
		body{
			text-align:center;
		}
	</style>
</head>
<body>
	<h1>Menu principal</h1>
	<a class="menu"href="lista_clientes.php">Clientes</a>
	<a class="menu"href="lista_peliculas.php">Peliculas</a>
</body>
</html>