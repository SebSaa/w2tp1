<?php 
class ProdModel
{
    private $db_connection;
    
    function __construct()
    {
        $this->db_connection = new PDO('mysql:host=localhost;'
        .'dbname=super_m;charset=utf8'
        , 'root', '');
    }
    function getProds()
    {
        $sentencia = $this->db_connection->prepare( "select * from producto");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
    function slgetProds()
    {
        $sentencia = $this->db_connection->prepare( "select nombre from producto");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function getProd($id)
    {
        $sentencia = $this->db_connection->prepare( "select * from producto"
                ." WHERE id_Prod = ?");
        $sentencia->execute(array($id));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    function saveProducto($nombre, $cat_id)
    {
        echo $nombre;
        //preparar la sentecia SQL con PDO seguro (los ?)
        $sentencia = $this->db_connection->prepare(
            "INSERT INTO producto(nombre,id_cat) VALUES(?,?)");
        //pasar los parametros y ejecutar en la BBDD
        $sentencia->execute(array($nombre,$cat_id));
    }

    function deleteProd($id_Cat)
    {
        $sentencia = $this->db_connection->prepare( 
        "delete from producto where id_Prod=?");
        $sentencia->execute(array($id_Cat));
    }


    function editProd($id_prod,$nombrenuevo)
    {
        $sentencia = $this->db_connection->prepare( 
        "UPDATE producto SET nombre = '$nombrenuevo' WHERE id_Prod=?");
        $sentencia->execute(array($id_prod));
    }

}