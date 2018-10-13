<?php
//require_once "Models/ProdModel.php";
require_once "libs/Smarty.class.php";
class LoginView
{
    private $basehref;
        
        public function __construct(){
            $this->basehref = '//'.$_SERVER['SERVER_NAME'] 
                .dirname($_SERVER['PHP_SELF']).'/';     
        }
    public function showLogin($mensaje="")
        {
            $smarty = new Smarty();
            $smarty->assign('titulo',"Login");
            $smarty->assign('error',$mensaje);
            $smarty->assign('basehref',$this->basehref);
            $smarty->display('templates/login.tpl');
        }
    
}
