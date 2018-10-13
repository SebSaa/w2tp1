<?php
    require_once "Models/CatModel.php";
    require_once "Controllers/SecuredController.php";
    require_once "libs/Smarty.class.php";
    class CatView{
        private $basehref;
        
        public function __construct(){
            $this->basehref = '//'.$_SERVER['SERVER_NAME'] 
                .dirname($_SERVER['PHP_SELF']).'/';     
        }

        //utilizado para catsl        
        public function slshowCats($categoria)
        {
            $smarty = new Smarty();
            $smarty->assign('titulo',"Categorias");
            $smarty->assign('categorias_list',$categoria);
            $smarty->assign('basehref',$this->basehref);
            $smarty->display('templates/sllistaCat.tpl');
        }

        public function showCats($categoria)
        {
            $user = $_SESSION['USERNAME'];
            $smarty = new Smarty();
            $smarty->assign('titulo',"Categorias");
            $smarty->assign('usuario',$user);
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