<?php
require_once "Views/ProdView.php";
require_once "Models/ProdModel.php";
require_once "Controllers/SecuredController.php";
class ProdController extends SecuredController
{
    public function saveProducto()
    {
        if(isset($_POST["nombre"]))
        {
            $nombre = $_POST["nombre"];
            $cat_id = $_POST["categoria"];
            //echo $nombre;
            //echo $cat_id;
            $model = new ProdModel();
            $model->saveProducto($nombre,$cat_id);          
        }   
        header("Location: verprod");
    }   

    public function deleteProd($id)
    {
        $model = new ProdModel();
        $model->deleteProd($id);          
        header("Location: ../../prodview");
    }

    public function showProductos()
    {
        $prodmodel = new ProdModel();
        $productos = $prodmodel->getProds();
        $catmodel = new CatModel();
        $categoria = $catmodel->getCats();
        $view = new ProdView();
        $view->showProds($productos,$categoria);

    }
    
    public function verEditProd($id)
    {
        $prodmodel = new ProdModel();
        $producto = $prodmodel->getProd($id);         
        $view = new ProdView();
        $view->showEditProd($producto);
        //header("Location: ../../ver");
    }

    public function editProd()
    {
        if(isset($_POST["nombre"]))
        {
            $nombre = $_POST["nombre"];
            $id = $_POST["id"];
            $precio = $_POST["precio"];
            $stock = $_POST["stock"];
            $prodmodel = new ProdModel();
            $producto = $prodmodel->editProd($id,$nombre,$precio,$stock);           
        }   
        header("Location: prodview");
    }

    public function slshowProductos()
    {
        $user =  $_SESSION['USERNAME'];
        $prodmodel = new ProdModel();
        $productos = $prodmodel->slgetProds();
        $view = new ProdView();
        $view->slshowProds($productos,$user);
    }
    public function showProdCat()
    {
        $promodel = new Prodmodel();
        $proxcat = $promodel->slproxcat();
        $view = new ProdView();
        $view->showProCat($proxcat);
        
    }

    
}
    