<?php
require_once("Peliculas.php");
$Peliculas=new Peliculas();
$datos=$_REQUEST;

if(empty($datos['pel_id'])){



$Peliculas->create($datos['pel_nombre'],
	$datos['pel_fecha']);

}else{

	if( isset($datos['pel_nombre'])){ 


	$Peliculas->update($datos['pel_nombre'],
	$datos['pel_fecha'],
	$datos['pel_id']);



    }else{ 
	$Peliculas->delete($datos['pel_id']);

     }

}

header("location:lista_peliculas.php");

?>