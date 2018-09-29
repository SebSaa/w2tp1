<?php 
class Sl_ProdModel
{
    private $db_connection;
    
    function __construct()
    {
        $this->db_connection = new PDO('mysql:host=localhost;'
        .'dbname=super_m;charset=utf8'
        , 'root', '');
    }
    function slgetProds()
    {
        $sentencia = $this->db_connection->prepare( "select * from producto");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function slgetProd($id)
    {
        $sentencia = $this->db_connection->prepare( "select * from producto"
                ." WHERE id_Prod = ?");
        $sentencia->execute(array($id));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    

}