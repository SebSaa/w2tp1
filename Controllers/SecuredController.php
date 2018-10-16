<?php
require_once "Controllers/AdminController.php";

class SecuredController extends AdminController {

    public function __construct() {
        session_start();

        // verifica que este logueado
        if(isset($_SESSION['USERNAME'])){// si esta logueado 
            if (time() - $_SESSION['LAST_ACTIVITY'] > 1800) { // expiro el timeout
                header('Location: '. LOGIN);
                die();
            }

            $_SESSION['LAST_ACTIVITY'] = time();
        }
        else {
            header('Location: '. LOGIN);
            die();
          }
    }
}