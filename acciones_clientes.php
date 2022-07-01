<?php
require_once("Clientes.php");
$Clientes=new Clientes();
$datos=$_REQUEST;

if(empty($datos['cli_id'])){



$Clientes->create($datos['cli_nombres'],
	$datos['cli_apellidos'],
	$datos['cli_edad']);

}else{

	if( isset($datos['cli_nombres'])){ 


	$Clientes->update($datos['cli_nombres'],
	$datos['cli_apellidos'],
	$datos['cli_edad'],$datos['cli_id']);



    }else{ 
	$Clientes->delete($datos['cli_id']);

     }

}

header("location:lista_clientes.php");

?>