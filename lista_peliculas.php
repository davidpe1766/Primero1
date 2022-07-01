<?php
require_once('Peliculas.php');
$Peliculas=new Peliculas();
$rest=$Peliculas->lista_peliculas();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lista Peliculas</title>
	<style>
		h1{
			text-align:center;
			color:#09B5E7;
			padding: 8px;
			background: black;
			box-shadow:5px 5px 10px #02DFE3;
			border-radius:10px;
		}

		th{
			text-align:center;
			color:#f6f740;
			padding: 8px;
			background: black;
			border: solid 1px white;
			box-shadow:5px 5px 10px #09B5E7;

		}

		td{

			padding: 8px;
			border: solid 1px black;

		}
		table{
			width:80%;
			border-collapse: collapse;
			text-align:center;
			border-radius:5px;
		}
		tr{
			border-radius:10px;
			border: solid 1px black;
		}
		a{
			background:#b1b5c8 ;
			color:#F2EDED;
			text-decoration:none;
			padding:5px;
			font-family: Arial;
			border-radius:5px;
		}
	</style>

</head>
<body>
	<h1>Lista Peliculas</h1>
	<a href="formulario_peliculas.php">Nueva pelicula</a>
	<table align="center">
		<tr>
			<th style="background:#000300;color:#09B5E7;">Id</th>
			<th style="background:#000300;color:#09B5E7;">Nombres</th>
			<th style="background:#000300;color:#09B5E7;">Fecha</th>
			<th style="background:#000300;color:#09B5E7;">Edit</th>
		
		
		</tr>
		<?php
		foreach ($rest as $r) {
			echo "<tr>

			  <td>{$r['pel_id']}</td>
              <td>{$r['pel_nombre']}</td>
              <td>{$r['pel_fecha']}</td>
             <td>

              <a href='formulario_peliculas.php?pel_id={$r["pel_id"]}'>
              <img/src= 'descarga.png'>
              </a>

              <a href='acciones_peliculas.php?pel_id={$r["pel_id"]}'  onclick='return validar()' >
              <img/src= 'elim.png'>
              </a>
              </td>  

			</tr>";
		}
			 

		?>
	</table>
</body>
</html>
<script>
	function validar(){ 
		if(confirm("Desea Eliminar")){
			return true;
		}else{
			return false;
		}
	}
</script>