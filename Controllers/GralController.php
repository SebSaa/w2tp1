<?php
require_once "Views/GralView.php";
class GralController{
    public function showInicio(){
        $view = new GralView();
        $view->showIndex();
    }



}