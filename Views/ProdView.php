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
            $user = $_SESSION['USERNAME'];
            $smarty = new Smarty();
            $smarty->assign('titulo',"Productos");
            $smarty->assign('usuario',$user);
            $smarty->assign('categorias_list',$categorias);
            $smarty->assign('productos_list',$productos);
            $smarty->assign('basehref',$this->basehref);
            $smarty->display('templates/listProd.tpl');
        }

        function showEditProd($producto)
        {
            $smarty = new Smarty();
            $smarty->assign('titulo',"Editando Producto");
            $smarty->assign('producto_list',$producto);
            $smarty->assign('basehref',$this->basehref);
            $smarty->display('templates/editProd.tpl');
        }

        //mostramos los productos solos con precio y stcok
        public function slshowProds($productos)
        {
            $smarty = new Smarty();
            $smarty->assign('titulo',"Productos");
            $smarty->assign('productos_list',$productos);
            $smarty->assign('basehref',$this->basehref);
            $smarty->display('templates/sllistProd.tpl');
        }

        /*public function slshowProCat($productos,$categorias)
        {
            $smarty = new Smarty();
            $smarty->assign('titulo',"Productos");
            $smarty->assign('productos_list',$productos);
            $smarty->assign('categorias_list',$categorias);
            $smarty->assign('basehref',$this->basehref);
            $smarty->display('templates/slcatprod.tpl');
        }*/

        public function slshowProCat($proxcat)
        {
            $smarty = new Smarty();
            $smarty->assign('titulo',"Productos por Categoria");
            $smarty->assign('listado',$proxcat);
            $smarty->assign('basehref',$this->basehref);
            $smarty->display('templates/slproxcat.tpl');
        }

        public function slshowprod($producto,$categoria)
        {
            $smarty = new Smarty();
            $smarty->assign('titulo',"Detalle de un Producto");
            $smarty->assign('producto',$producto);
            $smarty->assign('categoria',$categoria);
            $smarty->assign('basehref',$this->basehref);
            $smarty->display('templates/slprod.tpl');

        }
    }