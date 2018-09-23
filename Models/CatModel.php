<?php 
class CatModel
{
    private $db_connection;
    
    function __construct()
    {
        $this->db_connection = new PDO('mysql:host=localhost;'
        .'dbname=super_m;charset=utf8'
        , 'root', '');
    }
    function getCats()
    {
        $sentencia = $this->db_connection->prepare( "select * from categoria");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function getCat($id)
    {
        $sentencia = $this->db_connection->prepare( "select * from categoria"
                ." WHERE id_Cat = ?");
        $sentencia->execute(array($id));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    function saveCat(String $nombre)
    {
        //preparar la sentecia SQL con PDO seguro (los ?)
        $sentencia = $this->db_connection->prepare(
            "INSERT INTO categoria(nombre) VALUES(?)");
        //pasar los parametros y ejecutar en la BBDD
        $sentencia->execute(array($nombre));
    }

    function deleteCat($id_Cat)
    {
        $sentencia = $this->db_connection->prepare( 
        "delete from categoria where id_Cat=?");
        $sentencia->execute(array($id_Cat));
    }


    function editCat($id_cat,$nombrenuevo)
    {
        $sentencia = $this->db_connection->prepare( 
        "UPDATE categoria SET nombre = '$nombrenuevo' WHERE id_Cat=?");
        $sentencia->execute(array($id_cat));
    }

}