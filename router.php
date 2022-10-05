<?php
require_once 'app/controller/paragliding.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'login';
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action); 

$controller=new ParaglidingController();

switch ($params[0]){
    case 'login':
        $controller->showLogin();
        break;
    
    case 'gliders':
        $id = $params[1];
        $controller->showGliders($id);
        break;
    
    // case 'add':
    //     $controller->addGlider();
    //     break;

    // case 'delete':
    //     $controller->deleteGlider();
    //     break;
    
    // case 'edit':
    //     $controller->editGlider();
    //     break;
    
    case 'about-us':
        $id = $params[1];
        $controller->showAboutUs($id);
        break;

     default:
        echo "404 not found";

        break;
}

