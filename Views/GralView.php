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
            $smarty = new Smarty;
            $smarty->assign('titulo',"Categorias");
            $smarty->assign('basehref',$this->basehref);
            $smarty->display('templates/index.tpl');
        }
    }
    