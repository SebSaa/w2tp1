<?php
require_once "Views/CatView.php";
require_once "Models/CatModel.php";
require_once "Controllers/SecuredController.php";
class CatController extends SecuredController
{
    public function saveCat()
    {
        if(isset($_POST["nombre"]))
        {
            $nombre = $_POST["nombre"];
            $model = new CatModel();
            $model->saveCat($nombre);          
        }   
        header("Location: catview");
    }   

    public function deleteCat($id)
    {
        $model = new CatModel();
        $model->deleteCat($id);          
        header("Location: ../../catview");
    }

    public function showCats()
    {
        $catmodel = new CatModel();
        $categoria = $catmodel->getCats();
        $view = new CatView();
        $view->showCats($categoria);

    }

    

    public function verEditCat($id)
    {
        $catmodel = new CatModel();
        $categoria = $catmodel->getCat($id);         
        $view = new CatView();
        $view->showEditCat($categoria);
        //header("Location: ../../ver");
    }

    public function editCat($id)
    {

        if(isset($_POST["nombre"]))
        {
            $nombre = $_POST["nombre"];
            $id = $_POST["id"];
            $catmodel = new CatModel();
            $categoria = $catmodel->editCat($id,$nombre); 

        }   

             
       
        header("Location: catview");
    }
    
}
    