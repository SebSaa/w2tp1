<?php
require_once "Views/CatView.php";
require_once "Models/CatModel.php";
class CatSlController
{
    public function slshowCats()
    {
        $catmodel = new CatModel();
        $categoria = $catmodel->slgetCats();
        $view = new CatView();
        $view->slshowCats($categoria);

    }
        
}
    