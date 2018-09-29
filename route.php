<?php

require_once 'Controllers/CatController.php';
require_once 'Controllers/ProdController.php';
require_once 'Controllers/GralController.php';
require_once 'Controllers/Sl_ProdController.php';
//require_once 'Views/GralView.php';


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
    case 'slprocatview':
        $controller = new ProdController();
        $controller->slshowProCat();
        break;
    case 'slprodview':
        $controller = new ProdController();
        $controller->slshowProductos();
        break;
    case 'slcatview':
        $controller = new CatController();
        $controller->slshowCats();
        break;
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
    case 'verprod':
        $controller = new ProdController();
        $controller->showProductos();
        break;
    case 'saveprod':
        $controller = new ProdController();
        $controller->saveProducto();
        break;
    case 'vercat': 
        $controller = new CatController();
        $controller->showCat();
        break;
    case 'inicio':
        $controller = new GralController();
        $controller->showInicio();
        //$view = new GralView();
        //$view->showindex();
        break;
    default: 
        $controller = new GralController();
        $controller->showInicio();
        //$view = new GralView();
        //$view->showindex();
        //$controller = new CatController();
        //$controller->showCat();
        break;
}
?>