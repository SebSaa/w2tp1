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
        $sentencia = $this->db_connection->prepare( "select * from producto order by nombre");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
    
    function getProd($id)
    {
        $sentencia = $this->db_connection->prepare( "select * from producto"
                ." WHERE id_Art = ?");
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

    function deleteProd($id)
    {
        $sentencia = $this->db_connection->prepare( 
        "delete from producto where id_Art=?");
        $sentencia->execute(array($id));
    }

    function editProd($id_prod,$nombrenuevo,$precio,$stock)
    {
        $sentencia = $this->db_connection->prepare( 
        "UPDATE producto SET nombre = '$nombrenuevo', precio='$precio', stock='$stock' WHERE id_Art=?");
        $sentencia->execute(array($id_prod));
    }

    //llamado x showProds de ProdSlontroller
    function slgetProds()
    {
        $sentencia = $this->db_connection->prepare( "select * from producto");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    //llamado x showProdCat de ProdSlontroller
    function slproxcat()
    {
        $sentencia = $this->db_connection->prepare( "SELECT  producto.*, categoria.nombre as nombrec, categoria.id_Cat 
        FROM categoria, producto WHERE categoria.id_Cat = producto.id_Cat ORDER BY nombrec");
        $sentencia->execute();
        //var_dump($sentencia->errorInfo());
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

}