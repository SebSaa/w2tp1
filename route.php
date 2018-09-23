<?php

require_once 'controllers/CatController.php';


// constantes
define('ACTION', 0); 
define('ID', 1);

// si no indica "action" forzamos asi entra al default
if (!isset($_GET['action']))
    $_GET['action'] = '';

// parsea (separa) la url (si viene "sumar/5/8" => [sumar, 5, 8])
$action = $_GET['action'];
$partesURL = explode("/", $action);

// decide que acción tomar en base a la url
switch ($partesURL[ACTION]) {
    case 'save': 
        $controller = new CatController();
        $controller->saveCat();
        break;
    case 'veredit': 
        $controller = new CatController();
        $controller->verEditCat($partesURL[ID]);
        break;
    case 'edit': 
        $controller = new CatController();
        $controller->editCat($partesURL[ID]);
        var_dump($partesURL[ID]);
        break;
    case 'delete': 
        $controller = new CatController();
        $controller->deleteCat($partesURL[ID]);
        break;
    case 'ver': 
    default: 
        $controller = new CatController();
        $controller->showCat();
        break;
}
?>