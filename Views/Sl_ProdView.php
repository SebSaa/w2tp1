<?php
    require_once "Models/ProdModel.php";
    require_once "libs/Smarty.class.php";
    class Sl_ProdView{
        private $basehref;
        
        public function __construct(){
            $this->basehref = '//'.$_SERVER['SERVER_NAME'] 
                .dirname($_SERVER['PHP_SELF']).'/';     
        }
        public function slshowProds($productos,$categorias)
        {
            $smarty = new Smarty();
            $smarty->assign('titulo',"Categorias y Productos");
            $smarty->assign('categorias_list',$categorias);
            $smarty->assign('productos_list',$productos);
            $smarty->assign('basehref',$this->basehref);
            $smarty->display('templates/slcatprod.tpl');
        }
        
        
    }