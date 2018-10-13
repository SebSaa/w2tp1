<?php
require_once "libs/Smarty.class.php";
    class GralView 
    {
        private $basehref;

        public function __construct() {
            $this->basehref = '//'.$_SERVER['SERVER_NAME'] 
                .dirname($_SERVER['PHP_SELF']).'/';
           
            }

        public function showIndex() {
            $user = $_SESSION['USERNAME'];
            $smarty = new Smarty;
            $smarty->assign('titulo',"Inicio");
            $smarty->assign('usuario',$user);
            $smarty->assign('basehref',$this->basehref);
            $smarty->display('templates/admin.tpl');
        }
        public function showIndexsl() {
            $smarty = new Smarty;
            $smarty->assign('titulo',"Inicio");
            $smarty->assign('basehref',$this->basehref);
            $smarty->display('templates/index.tpl');
        }

        
    }
    