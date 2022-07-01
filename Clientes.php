<?php
require_once('Conection.php');
class Clientes extends Conection{

 function lista_clientes(){
 $resultado=$this->con->query("SELECT * FROM Clientes ");
 return $resultado->fetch_all(MYSQLI_ASSOC);//
 }
 function create($cli_nombres,$cli_apellidos,$cli_edad){
    return $this->con->query("INSERT INTO Clientes (cli_nombres,
                                             cli_apellidos,
                                             cli_edad)
                                            values('$cli_nombres',
                                                   '$cli_apellidos',
                                                   '$cli_edad')
                                                
        ");

 }
 function edit($cli_id){
    $resultado=$this->con->query("SELECT * FROM Clientes WHERE cli_id=$cli_id ");
    return $resultado->fetch_all(MYSQLI_ASSOC)[0];

 }

function update($cli_nombres,$cli_apellidos,$cli_edad,$cli_id){
    $this->con->query("UPDATE Clientes 
        SET cli_nombre='$cli_nombres',
        cli_apellidos='$cli_apellidos',
        cli_edad='$cli_edad'
        WHERE cli_id=$cli_id
        ");
}
function delete($cli_id){ 
    $this->con->query("DELETE FROM Clientes WHERE cli_id=$cli_id");     


}


}

?>