<?php
    require_once "Models/ProdModel.php";
    require_once "libs/Smarty.class.php";
    class ProdView{
        private $basehref;
        
        public function __construct(){
            $this->basehref = '//'.$_SERVER['SERVER_NAME'] 
                .dirname($_SERVER['PHP_SELF']).'/';     
        }
        public function showProds($productos,$categorias)
        {
            $smarty = new Smarty();
            $smarty->assign('titulo',"Productos");
            $smarty->assign('categorias_list',$categorias);
            $smarty->assign('productos_list',$productos);
            $smarty->assign('basehref',$this->basehref);
            $smarty->display('templates/listProd.tpl');
        }
        
        function showEditCat($categoria)
        {
            $smarty = new Smarty();
            $smarty->assign('titulo',"Editando Producto");
            $smarty->assign('categorias_list',$categoria);
            $smarty->assign('basehref',$this->basehref);
            $smarty->display('templates/editCat.tpl');
        }
    }