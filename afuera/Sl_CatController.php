<?php
require_once "Views/Sl_CatView.php";
require_once "Models/Sl_CatModel.php";
class Sl_CatController
{
    public function slshowCat()
    {
        $catmodel = new Sl_CatModel();
        $categoria = $catmodel->slgetCats();
        $view = new Sl_CatView();
        $view->slshowCats($categoria);

    }

                
       
        //header("Location: vercat");
    
    
}
    