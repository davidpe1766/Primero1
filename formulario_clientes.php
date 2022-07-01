<?php
require_once("Clientes.php");
$Clientes=new Clientes();
if(isset( $_GET['cli_id'])){
	$datos=$Clientes->edit( $_GET['cli_id']);
}else{
$datos['cli_id']=NULL;
$datos['cli_nombres']=NULL;
$datos['cli_apellidos']=NULL;
$datos['cli_edad']=NULL;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario Clientes</title>
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
	<h1>Formulario de registro de clientes</h1>

	<form action="acciones_clientes.php" method="POST" >
		<input type="hidden" id="cli_id" name="cli_id" value="<?php echo $datos['cli_id'] ?>" >



		<div class="contenedores" >
			<label for="cli_nombres">Nombres</label>
			<input type="text" name="cli_nombres" id="cli_nombres" value="<?php echo $datos['cli_nombres'] ?>">
		</div>

		<div class="contenedores" >
			<label for="cli_apelldios">Apellidos</label>
			<input type="text" name="cli_apellidos" id="cli_apellidos" value="<?php echo $datos['cli_apellidos'] ?>">
		</div>

		<div class="contenedores" >
			<label for="cli_edad">edad</label>
			<input type="text" name="cli_edad" id="cli_edad" value="<?php echo $datos['cli_edad'] ?>">
		</div>
		
		<div class="contenedores">
		<button>Guardar</button>
	</form>
</body>
</html>