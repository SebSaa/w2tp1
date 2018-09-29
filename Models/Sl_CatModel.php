<?php 
class Sl_CatModel
{
    private $db_connection;
    
    function __construct()
    {
        $this->db_connection = new PDO('mysql:host=localhost;'
        .'dbname=super_m;charset=utf8'
        , 'root', '');
    }
    function slgetCats()
    {
        $sentencia = $this->db_connection->prepare( "select * from categoria");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function slgetCat($id)
    {
        $sentencia = $this->db_connection->prepare( "select * from categoria"
                ." WHERE id_Cat = ?");
        $sentencia->execute(array($id));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    

}