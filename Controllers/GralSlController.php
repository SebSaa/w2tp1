<?php
require_once "Views/GralView.php";
class GralSlController
{
    public function showInicio(){
        $view = new GralView();
        $view->showIndexsl();
    }
}