<?php

require_once'app/model/MainModel.php';
require_once'app/model/UserModel.php';
require_once'app/view/UserView.php';

class CheckController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new UserModel();
        $this->view = new UserView();
    }

    public function showFormLogin() {
        $this->view->FormLogin();
    }

    public function verifyUser() {
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $user = $this->model->UserByEmail($email);
        
        
        if ($user && password_verify($password, $user->password)) {
            
            session_start();
            $_SESSION['id_user'] = $user->id_admin;
            $_SESSION['email_user'] = $user->email;

            header("Location: " . BASE_URL . 'home');
        } 
        else {
            
           $this->view->FormLogin("El usuario o la contraseña no existe.");
        } 

    }

    public function logoutUser() {
            session_start();
            session_destroy();
            header("Location: " . BASE_URL);
        }
    }
    
