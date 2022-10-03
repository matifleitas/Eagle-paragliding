<?php

// require_once'login-model.php';
require_once'./login/loginview.php';

class LoginController {
    private $model; //atributos
    private $view; 

    function __construct()  {
        $this->view = new LoginView(); 
    }

    function showLogin() { 
        $this->view->Home(); 
    }

    function showGlider() {
        $this->view->GliderLists();
    }

    function showAboutUs() {
        $this->view->infoAboutUs();
    }
}