<?php
require_once 'login/controller/logincontroller.php';


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'login';
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action); 

$controller=new LoginController();

switch ($params[0]){
    case 'login':
        $controller->showLogin();
        break;
    
    case 'gliders':
        $controller->showGlider($params[1]);
        break;
    
    case 'about-us':
        $controller->showAboutUs($params[1]);
        break;

     default:
        echo "404 not found";
        # code...
        break;
}

