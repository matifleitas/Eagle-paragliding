<?php

require_once'app/model/login.model.php';
require_once'app/view/login.view.php';

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

        // busco el usuario por email
        $user = $this->model->UserByEmail($email);

        if ($user && password_verify($password, $user->password)) {

            // inicio una session para este usuario
            session_start();
            $_SESSION['id_user'] = $user->id;
            $_SESSION['email_user'] = $user->email;
            $_SESSION['is_loged'] = true;

            header("Location: " . BASE_URL);
        } else {
            // si los datos son incorrectos muestro el form con un erro
           $this->view->FormLogin("El usuario o la contraseña no existe.");
        } 

    }

    public function logoutUser() {
            session_start();
            session_destroy();
            header("Location: " . BASE_URL);
        }
    }
    
