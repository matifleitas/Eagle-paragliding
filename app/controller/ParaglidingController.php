<?php

require_once'app/model/ParaglidingModel.php';
require_once'app/model/MainModel.php';
require_once'app/view/ParaglidingView.php';
require_once'app/model/CategoryModel.php';

class ParaglidingController {
    private $model; 
    private $view;
    private $categoryModel; 
    private $email;

    function __construct()  {
        $this->view = new ParaglidingView(); 
        $this->model = new ParaglidingModel();
        $this->categoryModel = new CategoryModel();
        session_start();
        $this->setEmail();
    }

    function setEmail() {
        if (isset ($_SESSION['EMAIL_USER'])){
            $this->email=$_SESSION['EMAIL_USER'];
        }
    }

    function showHome() {
        $categories= $this->categoryModel->getAllCategories();
        $this->view->ShowHomeEagle($categories, $this->email);
    }

    function showGliders() {
        
        $gliders=$this->model->getAllGliders();
        $categories=$this->categoryModel->getAllCategories();
   
        $this->view->GliderLists($gliders, $categories, $this->email);
        
    }

    function showOneGlider($id) {
        $glider=$this->model->getoneGliderbyId($id);
        $this->view->GliderById($glider, $this->email);
    
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
        $categories=$this->categoryModel->getAllCategories();
        $glider=$this->model->editGliderById($id);
        $this->view->showUpdateForm($glider, $categories, $this->email);

        header("Location: " . BASE_URL);
    }

    function sendGliderUpdate($id) {
        
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

    function getAllGlidersByCategoryId($id) {
        if (!empty($id)) {
            $gliderByCategory = $this->model->getAllGlidersByCategory($id);
            // var_dump($gliderByCategory);
            return $gliderByCategory;
        }
        else {
            $this->view->showError("Error al intentar borrar un genero");
        }
    }

    function showAboutUs() {
        $this->view->infoAboutUs($this->email);
    }
}

