<?php
require_once("Peliculas.php");
$Peliculas=new Peliculas();
if(isset( $_GET['pel_id'])){
	$datos=$Peliculas->edit( $_GET['pel_id']);
}else{
$datos['pel_id']=NULL;
$datos['pel_nombre']=NULL;
$datos['pel_fecha']=NULL;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario Peliculas</title>
	<style>
		.contenedores{
			margin-top:2px;
			margin-Left:100px;
			
		}
		label{
			width:100px;
			float:left ;
			font-family:Arial;
			font-size: 16px;
			border-bottom:solid 1px #ccc;
		}
	</style>
</head>
<body>
	<h1>Formulario de registro de peliculas</h1>

	<form action="acciones_peliculas.php" method="POST" >
		<input type="hidden" id="pel_id" name="pel_id" value="<?php echo $datos['pel_id'] ?>" >



		<div class="contenedores" >
			<label for="pel_nombre">Nombres</label>
			<input type="text" name="pel_nombre" id="pel_nombre" value="<?php echo $datos['pel_nombre'] ?>">
		</div>

		<div class="contenedores" >
			<label for="pel_fecha">Fecha</label>
			<input type="text" name="pel_fecha" id="pel_fecha" value="<?php echo $datos['pel_fecha'] ?>">
		</div>
		
		<div class="contenedores">
		<button>Guardar</button>
	</form>
</body>
</html>