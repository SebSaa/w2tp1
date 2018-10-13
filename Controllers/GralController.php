<?php
require_once "Views/GralView.php";
require_once "Controllers/SecuredController.php";
class GralController extends SecuredController
{
    public function showInicio(){
        $view = new GralView();
        $view->showIndex();
    }
}