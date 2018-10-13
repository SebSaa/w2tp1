<?php
require_once 'Controllers/AdminController.php';
require_once 'Models/UserModel.php';
require_once 'Views/LoginView.php';

class LoginController extends AdminController
{

    public function showLogin()
    {
        $view = new LoginView();
        $view->showLogin();
    }

    public function verify() {
        $username = $_POST['username'];
        $password = $_POST['password'];
        

        if(!empty($username) && !empty($password)){
            $model = new UserModel();
            $user = $model->getUser($username);
            
            if((!empty($user)) && password_verify($password, $user['pass'])) {
                session_start();
                $_SESSION['USERNAME'] = $username;
                $_SESSION['ID'] = $user["id_User"];
                $_SESSION['LAST_ACTIVITY'] = time();
                //$index = new GralView();
                //$index->showIndex($username);
                header("Location: ".HOME);
                die();
            }
            else {
                $view = new LoginView();
                $view->showLogin("Usuario o contraseña incorrecta");
            }
        }  

    }
    public function logout() {
        session_start();
        session_destroy();
        header('Location: '.LOGIN);
        die(); // buena practica hacer logout
    }

} 

