<?php

require_once'app/model/MainModel.php';
require_once'app/model/UserModel.php';
require_once'app/view/UserView.php';

class CheckController {
    private $model;
    private $view;
    private $categoryModel;
    private $email;

    public function __construct() {
        $this->model = new UserModel();
        $this->view = new UserView();
        $this->categoryModel = new CategoryModel();
        session_start();
        $this->setEmail();
    }

    function setEmail() {
        if (isset ($_SESSION['EMAIL_USER'])){
            $this->email=$_SESSION['EMAIL_USER'];
        }
    }

    public function showFormLogin() {
        $categories= $this->categoryModel->getAllCategories();
        $this->view->FormLogin($categories, $this->email);
    }

    public function verifyUser() {
        $categories= $this->categoryModel->getAllCategories();

        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $user = $this->model->UserByEmail($email);
        
        
        if ($user && password_verify($password, $user->password)) {
            session_start();
            $_SESSION['EMAIL_USER'] = $user->email;
          
            header("Location: " . BASE_URL . 'home');
            
        } 
        else {
           $this->view->FormLogin($categories, "El usuario o la contraseña no existe.");
        } 
    }

    public function logoutUser() {
            session_start();
            session_destroy();
            header("Location: " . BASE_URL . 'home');
        }
    }
    
