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

    
}
    