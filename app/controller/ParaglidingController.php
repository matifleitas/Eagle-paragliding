<?php

require_once'app/model/ParaglidingModel.php';
require_once'app/model/MainModel.php';
require_once'app/view/ParaglidingView.php';
require_once'app/model/CategoryModel.php';

class ParaglidingController {
    private $model; 
    private $view;
    private $categoryModel; 

    function __construct()  {
        $this->view = new ParaglidingView(); 
        $this->model = new ParaglidingModel();
        $this->categoryModel = new CategoryModel();
    }

    function showHome() {
        $categories= $this->categoryModel->getAllCategories();
        $this->view->ShowHomeEagle($categories);
    }

    function showGliders() {
        $gliders=$this->model->getAllGliders();
        $categories=$this->categoryModel->getAllCategories();
        $this->view->GliderLists($gliders, $categories);
    }

    // function showByCategory($id) {
    //     $categories=$this->model->getGlidersCategory($id);
    //     $this->view->GlidersCategory($categories);
    // }

    function showOneGlider($id) {
        $glider=$this->model->getGliderbyId($id);
        $this->view->GliderById($glider);
        
        // header("Location: " . BASE_URL . );
    }

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
        $id_fk=$_POST['ID_fk'];

        $this->model->addGliderByForm($id, $name, $category, $description, $difficulty, $price, $id_fk);
        header("Location: " . BASE_URL);
    }

    // function editGlider($id) {

    //     $id_paraglider=$_POST['id'];
    //     $name=$_POST['name'];
    //     $category=$_POST['category'];
    //     $description=$_POST['description'];
    //     $difficulty=$_POST['difficulty'];
    //     $price=$_POST['price'];

    //     $this->model->editGliderById($id_paraglider, $name, $category, $description, $difficulty, $price, $id);
        
    //     header("Location: " . BASE_URL);
    // }

    function showformgliders() {
        $this->view->showFormsGliders();
    }


    function showAboutUs() {
        $this->view->infoAboutUs();
    }
}

