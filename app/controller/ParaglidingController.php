<?php

require_once'app/model/ParaglidingModel.php';
require_once'app/model/MainModel.php';
require_once'app/view/ParaglidingView.php';

class ParaglidingController {
    private $model; //atributos
    private $view; 

    function __construct()  {
        $this->view = new ParaglidingView(); 
        $this->model = new ParaglidingModel();
    }
    // function addGlider() {
    //     // $name=$_POST[''];
    //     // $description=$_POST[''];
    //     // $difficulty=$_POST[''];

    //     // $id = $this->model->insertGlider($name, $description, $difficulty);
        // header("Location: " . BASE_URL);
    // }
    function showHome() {
        $this->view->ShowHomeEagle();
    }

    function showGliders() {
        $gliders=$this->model->getAllGliders();
        $this->view->GliderLists($gliders);
    }

    function deleteGlider($id) {
        $this->model->deleteGliderById($id);
        header("Location: " . BASE_URL);
    }

    function editGlider($id) {
        $name=$_POST['name'];
        $description=$_POST['description'];
        $difficulty=$_POST['difficulty'];
        $price=$_POST['price'];

        $this->model->editGliderById($name, $description, $difficulty, $price, $id);
        
        header("Location: " . BASE_URL);
    }

    function showformgliders() {
        $this->view->showformsgliders();
    }


    function showAboutUs() {
        $this->view->infoAboutUs();
    }
}

