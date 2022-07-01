<?php
require_once('Conection.php');
class Peliculas extends Conection{

 function lista_peliculas(){
 $resultado=$this->con->query("SELECT * FROM Peliculas ");
 return $resultado->fetch_all(MYSQLI_ASSOC);//
 }
 function create($pel_nombre,$pel_fecha){
    return $this->con->query("INSERT INTO Peliculas (pel_nombre,
                                             pel_fecha)
                                            values('$pel_nombre',
                                                   '$pel_fecha')
                                                
        ");

 }
 function edit($pel_id){
    $resultado=$this->con->query("SELECT * FROM Peliculas WHERE pel_id=$pel_id ");
    return $resultado->fetch_all(MYSQLI_ASSOC)[0];

 }

function update($pel_nombre,$pel_fecha,$pel_id){
    $this->con->query("UPDATE Peliculas 
        SET pel_nombre='$pel_nombre',
        pel_fecha='$pel_fecha'
        WHERE pel_id=$pel_id
        ");
}
function delete($pel_id){ 
    $this->con->query("DELETE FROM Peliculas WHERE pel_id=$pel_id");     


}


}

?>