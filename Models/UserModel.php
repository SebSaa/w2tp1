<?php

class UserModel {

    private $db_connection;
    
    function __construct()
    {
        $this->db_connection = new PDO('mysql:host=localhost;'.'dbname=super_m;charset=utf8', 'root', '');
    }

    function getUser($username) {
        $sentencia = $this->db_connection->prepare("SELECT * FROM usuario WHERE nombre = ?");
        $sentencia->execute(array($username));

        return $sentencia->fetch(PDO::FETCH_ASSOC);
    }

}