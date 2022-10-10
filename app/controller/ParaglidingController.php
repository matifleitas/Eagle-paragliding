<?php

require_once'app/model/ParaglidingModel.php';
require_once'app/model/MainModel.php';
require_once'app/view/ParaglidingView.php';

class ParaglidingController {
    private $model; 
    private $view; 

    function __construct()  {
        $this->view = new ParaglidingView(); 
        $this->model = new ParaglidingModel();
    }

    function showHome() {
        $this->view->ShowHomeEagle();
    }

    function showGliders() {
        $gliders=$this->model->getAllGliders();
        $this->view->GliderLists($gliders);
    }

    function showByCategory($id) {
        $categories=$this->model->getGlidersCategory($id);
        $this->view->GlidersCategory($categories);
    }

    // function showOneGlider($id) {
    //     $glider=$this->model->getGliderbyId($id);
    //     $this->view->GliderById($glider);
    //     header("Location: " . BASE_URL);
    // }

    function deleteGlider($id) {
        $this->model->deleteGliderById($id);
        header("Location: " . BASE_URL);
    }

    function addGlider() {
        $id=$_POST['id'];
        $name=$_POST['name'];
        $category=$_POST['category'];
        $description=$_POST['description'];
        $difficulty=$_POST['difficulty'];
        $price=$_POST['price'];

        $this->model->addGliderByForm($id, $name, $category, $description, $difficulty, $price);
        header("Location: " . BASE_URL);
    }

    // function editGlider($id) {
    //     $name=$_POST['name'];
    //     $description=$_POST['description'];
    //     $difficulty=$_POST['difficulty'];
    //     $price=$_POST['price'];

    //     $this->model->editGliderById($name, $description, $difficulty, $price, $id);
        
    //     header("Location: " . BASE_URL);
    // }

    function showformgliders() {
        $this->view->showFormsGliders();
    }


    function showAboutUs() {
        $this->view->infoAboutUs();
    }
}

