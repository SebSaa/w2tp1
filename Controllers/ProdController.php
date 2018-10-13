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

    public function deleteCat($id)
    {
        $model = new CatModel();
        $model->deleteCat($id);          
        header("Location: ../../ver");
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
    
    public function verEditCat($id)
    {
        $catmodel = new CatModel();
        $categoria = $catmodel->getCat($id);         
        $view = new CatView();
        $view->showEditCat($categoria);
        //header("Location: ../../ver");
    }

    public function editCat($id)
    {
        if(isset($_POST["nombre"]))
        {
            $nombre = $_POST["nombre"];
            $id = $_POST["id"];
            $catmodel = new CatModel();
            $categoria = $catmodel->editCat($id,$nombre);           
        }   
        header("Location: ver");
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
    