<?php
    require_once "Models/CatModel.php";
    require_once "libs/Smarty.class.php";
    class CatView{
        private $basehref;
        
        public function __construct(){
            $this->basehref = '//'.$_SERVER['SERVER_NAME'] 
                .dirname($_SERVER['PHP_SELF']).'/';     
        }
        public function showCats($categoria)
        {
            
            $smarty = new Smarty();
            //equivalente: smarty("archivo.tpl", $basehref, $tareas, $titulo)
            $smarty->assign('titulo',"Categorias");
            $smarty->assign('categorias_list',$categoria);
            $smarty->assign('basehref',$this->basehref);
            $smarty->display('templates/listaCat.tpl');
        }
        
        function showEditCat($categoria)
        {
            $smarty = new Smarty();
            $smarty->assign('titulo',"Editando Categoria");
            $smarty->assign('categorias_list',$categoria);
            $smarty->assign('basehref',$this->basehref);
            $smarty->display('templates/editCat.tpl');
        }
    }