<?php
require_once 'app/controller/paragliding.controller.php';
require_once 'app/controller/login.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'gliders';
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action); 

// $paraglidingController=new ParaglidingController();

switch ($params[0]){
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
    
    case 'gliders':
        $paraglidingController=new ParaglidingController();
        $paraglidingController->showGliders();
        break;
    
    case 'add':
        $paraglidingController=new ParaglidingController();
        $paraglidingController->addGlider();
        break;

    case 'delete':
        $paraglidingController=new ParaglidingController();
        $paraglidingController->deleteGlider($id);
        break;
    
    case 'edit':
        $paraglidingController=new ParaglidingController();
        $paraglidingController->editGlider();
        $id = $params[1];
        break;
    
    // case 'about-us':
    //     $id = $params[1];
    //     $paraglidingController->showAboutUs($id);
    //     break;

     default:
        echo "404 not found";

        break;
}

