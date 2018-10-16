<?php
require_once "Views/ProdView.php";
require_once "Models/ProdModel.php";
class ProdSlController
{
    public function showProds()
    {
        $prodmodel = new ProdModel();
        $productos = $prodmodel->slgetProds();
        $view = new ProdView();
        $view->slshowProds($productos);
    }
    public function showProdCat()
    {
        $promodel = new Prodmodel();
        $proxcat = $promodel->slproxcat();
        $view = new ProdView();
        $view->slshowProCat($proxcat);
        
    }

    public function showProd($id_Art,$id_Cat)
    {
        $prodmodel = new ProdModel();
        $producto = $prodmodel->getProd($id_Art);
        $catmodel = new CatModel();
        $categoria = $catmodel->getCat($id_Cat);
        $view = new ProdView();
        $view->slshowprod($producto,$categoria);
    }
    

    
}
    