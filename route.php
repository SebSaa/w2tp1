<?php

require_once 'Controllers/CatSlController.php';
require_once 'Controllers/CatController.php';
require_once 'Controllers/ProdSlController.php';
require_once 'Controllers/ProdController.php';
require_once 'Controllers/GralSlController.php';
require_once 'Controllers/GralController.php';
require_once 'Controllers/LoginController.php';

//require_once 'Views/GralView.php';


// constantes
define('ACTION', 0); 
define('ID', 1);
define('ID2', 2);


// si no indica "action" forzamos asi entra al default
if (!isset($_GET['action']))
    $_GET['action'] = '';

// parsea (separa) la url (si viene "sumar/5/8" => [sumar, 5, 8])
$action = $_GET['action'];
$partesURL = explode("/", $action);

// decide que acción tomar en base a la url
switch ($partesURL[ACTION]) {
    case 'catsl':
        $controller = new CatSlController();
        $controller->slshowCats();
        break;
    case 'prodsl':
        $controller = new ProdSlController();
        $controller->showProds();
        break;
    case 'catprodsl':
        $controller = new ProdSlController();
        $controller->showProdCat();
        break;
    
    case 'iniciol':
        $controller = new GralController();
        $controller->showInicio();
         break;
    
    case 'catview':
         $controller = new CatController();
         $controller->showCats();
         break;
    case 'vermas': 
         $controller = new ProdSlController();
         $controller->showProd($partesURL[ID],$partesURL[ID2]);
         break;
    case 'prodview':
         $controller = new ProdController();
         $controller->showProductos();
         break;
    case 'prodcatview':
        $controller = new ProdController();
        $controller->showProdCat();
        break;
    
    
    case 'login':
        $controller = new LoginController();
        $controller->showLogin();
        break;
    case 'logout':
        $controller = new LoginController();
        $controller->logout();
        break;
    case 'verify':
        $controller = new LoginController();
        $controller->verify();
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
        //var_dump($partesURL[ID]);
        break;
    case 'vereditprod': 
        $controller = new ProdController();
        $controller->verEditProd($partesURL[ID]);
        break;
    case 'editprod': 
        $controller = new ProdController();
        $controller->editProd();
        //$controller->editProd($partesURL[ID]);
        //var_dump($partesURL[ID]);
        break;
    case 'delete': 
        $controller = new CatController();
        $controller->deleteCat($partesURL[ID]);
        break;
    case 'deleteprod': 
        $controller = new ProdController();
        $controller->deleteProd($partesURL[ID]);
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
        $controller = new GralSlController();
        $controller->showInicio();
         break;
    default: 
        $controller = new GralSlController();
        $controller->showInicio();
        break;
}
?>