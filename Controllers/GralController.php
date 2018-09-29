<?php
require_once "Views/GralView.php";
class GralController{
    public function showInicio(){
        $view = new GralView();
        $view->showIndex();
    }
    public function showCatProd(){
        $prodmodel = new ProdModel();
        $productos = $prodmodel->getProds();
        $catmodel = new CatModel();
        $categoria = $catmodel->getCats();
        $view = new ProdView();
        $view->showProds($productos,$categoria);





        $view = new GralView();
        $view->showCatProd();
    }



}