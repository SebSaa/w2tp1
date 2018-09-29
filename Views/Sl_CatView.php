<?php
    require_once "Models/CatModel.php";
    require_once "libs/Smarty.class.php";
    class Sl_CatView{
        private $basehref;
        
        public function __construct(){
            $this->basehref = '//'.$_SERVER['SERVER_NAME'] 
                .dirname($_SERVER['PHP_SELF']).'/';     
        }
        public function slshowCats($categoria)
        {
            
            $smarty = new Smarty();
            $smarty->assign('titulo',"Categorias");
            $smarty->assign('categorias_list',$categoria);
            $smarty->assign('basehref',$this->basehref);
            $smarty->display('templates/listaCat.tpl');
        }
        
        
    }