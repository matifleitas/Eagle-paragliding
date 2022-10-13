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
        $glider=$this->model->getoneGliderbyId($id);
        $this->view->GliderById($glider);
        
        // header("Location: " . BASE_URL . );
    }

    function deleteGlider($id) {
        $this->model->deleteGliderById($id);
        header("Location: " . BASE_URL);
    }

    function addGlider() {
        $name=$_POST['name'];
        $category=$_POST['category'];
        $description=$_POST['description'];
        $url=$_POST['URL'];
        $difficulty=$_POST['difficulty'];
        $price=$_POST['price'];
        $id_fk=$_POST['ID_fk'];

        $this->model->addGliderByForm($name, $category, $description, $url, $difficulty, $price, $id_fk);
        header("Location: " . BASE_URL . "home");
    }

    function editGlider($id) {

        $glider=$this->model->editGliderById($id);
        $this->view->showUpdateForm($glider);

        header("Location: " . BASE_URL);
    }

    function sendGliderUpdate($id) {
        $id_paraglider=$_POST['id'];
        $name=$_POST['name'];
        $category=$_POST['category'];
        $description=$_POST['description'];
        $url=$_POST['image'];
        $difficulty=$_POST['difficulty'];
        $price=$_POST['price'];
        $id_fk=$_POST['ID_fk'];

        $this->model->updateGliderById($id, $name, $category, $description, $url, $difficulty, $price, $id_fk);
        header("Location: " . BASE_URL .'home');
    }

    // function showformgliders() {
    //     $categories=$this->model->getAllcategoriesForm();
    //     $this->view->showFormsGliders($categories);
    // }

    function showAboutUs() {
        $this->view->infoAboutUs();
    }
}

