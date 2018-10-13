<?php
//require_once "Views/Sl_CatView.php";
require_once "Models/Sl_CatModel.php";
require_once "Views/Sl_ProdView.php";
require_once "Models/Sl_ProdModel.php";

class Sl_ProdController
{
    

    public function slshowProds()
    {
        $prodmodel = new Sl_ProdModel();
        $productos = $prodmodel->slgetProds();
        $catmodel = new Sl_CatModel();
        $categoria = $catmodel->slgetCats();
        $view = new Sl_ProdView();
        $view->slshowProds($productos,$categoria);

    }

    
    
}
    