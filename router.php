<?php

require_once 'app/controller/ParaglidingController.php';
require_once 'app/controller/CheckController.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home';
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action); 


switch ($params[0]) {
    case 'login':
        $checkController = new CheckController();
        $checkController->showFormLogin();
        break;

    case 'logout':
        $checkController = new CheckController();
        $checkController->logoutUser();

    case 'verify':
        $checkController = new CheckController();
        $checkController->verifyUser();
    
    case 'home':
        $paraglidingController=new ParaglidingController();
        $paraglidingController->showHome();
        break;

    case 'gliders':
        $paraglidingController=new ParaglidingController();
        $paraglidingController->showGliders();
        break;

    case 'category':
        $paraglidingController=new ParaglidingController();
        $id = $params[1];
        $paraglidingController->showByCategory($id);
    
    // case 'glider':
    //     $paraglidingController=new ParaglidingController();
    //     $id = $params[1];
    //     $paraglidingController->showOneGlider($id);

    case 'delete':
        $paraglidingController=new ParaglidingController();
        $id = $params[1];
        $paraglidingController->deleteGlider($id);
        break;
    
    case 'form':
        $paraglidingController=new ParaglidingController();
        $paraglidingController->showFormGliders();

    case 'add':
        $paraglidingController=new ParaglidingController();
        $paraglidingController->addGlider();

    // case 'edit':
    //     $paraglidingController=new ParaglidingController();
    //     $id = $params[1];
    //     $paraglidingController->editGlider($id);
    //     break;
    
    case 'about-us':
        $paraglidingController=new ParaglidingController();
        $paraglidingController->showAboutUs();
        break;

     default:
        echo "404 not found";

        break;
}

