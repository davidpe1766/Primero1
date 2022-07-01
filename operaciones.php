<?php
class Operaciones
{
	public $n1;
	public $n2;
	public $resultados;

	function __construct(){
		$this->n1=10;
		$this->n2=25;
		$this->n3=18;
		$this->n4=20;
	}

	function sumar(){
		return 
		$this->resultados=$this->n1+$this->n2;
		
		
	
	}
	function restar(){
		return 
		$this->resta=$this->n4-$this->n3;
	}
}
$Operaciones=new Operaciones();
echo $Operaciones->sumar();
echo $Operaciones->restar();


?>