<?php

require_once 'app/controller/ParaglidingController.php';
require_once 'app/controller/CheckController.php';
require_once 'app/controller/CategoryController.php';

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
        break;

    case 'verify':
        $checkController = new CheckController();
        $checkController->verifyUser();
        break;
    
    case 'home':
        $paraglidingController=new ParaglidingController();
        $paraglidingController->showHome();
        break;

    case 'gliders':
        $paraglidingController=new ParaglidingController();
        $paraglidingController->showGliders();
        break;

    case 'category':
        $categoryController=new CategoryController();
        $id = $params[1];
        $categoryController->showByCategory($id);
        break;
    
    case 'glider':
        $paraglidingController=new ParaglidingController();
        $id = $params[1];
        $paraglidingController->showOneGlider($id);

    case 'delete':
        $paraglidingController=new ParaglidingController();
        $id = $params[1];
        $paraglidingController->deleteGlider($id);
        break;
    
    // case 'form':
    //     $categoryController=new CategoryController();
    //     $categoryController->showformgliders();
    //     break;

    case 'add':
        $paraglidingController=new ParaglidingController();
        $paraglidingController->addGlider();
        break;

    case 'edit':
        $paraglidingController=new ParaglidingController();
        $id = $params[1];
        $paraglidingController->editGlider($id);
        break;

    case 'updated':
        $paraglidingController=new ParaglidingController();
        $id = $params[1];
        $paraglidingController->sendGliderUpdate($id);
        break;

    case 'about-us':
        $paraglidingController=new ParaglidingController();
        $paraglidingController->showAboutUs();
        break;

     default:
        $paraglidingController=new ParaglidingController();
        echo "404 not found";
        break;
}

