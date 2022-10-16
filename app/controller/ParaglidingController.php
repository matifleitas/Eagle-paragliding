<?php

require_once'app/model/ParaglidingModel.php';
require_once'app/model/MainModel.php';
require_once'app/view/ParaglidingView.php';
require_once'app/model/CategoryModel.php';
require_once'app/helpers/AdminHelper.php';

class ParaglidingController {
    private $model; 
    private $view;
    private $categoryModel; 
    private $email;
    private $helper;

    function __construct()  {
        $this->view = new ParaglidingView(); 
        $this->model = new ParaglidingModel();
        $this->categoryModel = new CategoryModel();
        $this->helper = new AdminHelper();
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
        $this->helper->askAdminIsLogged();
        $this->model->deleteGliderById($id);
        header("Location: " . BASE_URL . "gliders");
    }

    function addGlider() {
        $this->helper->askAdminIsLogged();
        $name=$_POST['name'];
        $category=$_POST['category'];
        $description=$_POST['description'];
        $difficulty=$_POST['difficulty'];
        $price=$_POST['price'];
        $id_fk=$_POST['ID_fk'];

        if($_FILES['input_name']['type'] == "image/jpg" || 
           $_FILES['input_name']['type'] == "image/jpeg" ||
           $_FILES['input_name']['type'] == "image/png" ) {

            $this->model->addGliderByForm($name, $category, $description, $difficulty, $price,
            $id_fk, $_FILES['input_name']['tmp_name']);
            header("Location: " . BASE_URL . "gliders");
           }
        else {        

        $this->model->addGliderByForm($name, $category, $description, $difficulty, $price, $id_fk);
        header("Location: " . BASE_URL . "gliders");
        }
    }

    function editGlider($id) {
        $this->helper->askAdminIsLogged();
        $categories=$this->categoryModel->getAllCategories();
        $glider=$this->model->editGliderById($id);
        
        $this->view->showUpdateForm($glider, $categories, $this->email);
    }

    function sendGliderUpdate($id) {
    $this->helper->askAdminIsLogged();
    $name=$_POST['name'];
    $category=$_POST['category'];
    $description=$_POST['description'];
    $difficulty=$_POST['difficulty'];
    $price=$_POST['price'];
    $id_fk=$_POST['ID_fk'];

    if($_FILES['input_name']['type'] == "image/jpg" || 
       $_FILES['input_name']['type'] == "image/jpeg" ||
       $_FILES['input_name']['type'] == "image/png" ) {

        $this->model->updateGliderById($id, $name, $category, $description, $difficulty, $price,
        $id_fk, $_FILES['input_name']['tmp_name']);
        header("Location: " . BASE_URL . "gliders");
       }
    else {    

    $this->model->updateGliderById($id, $name, $category, $description, $difficulty, $price, $id_fk);
    header("Location: " . BASE_URL . "gliders");
    }
}

    function getAllGlidersByCategoryId($id) {
        if (!empty($id)) {
            $gliderByCategory = $this->model->getAllGlidersByCategory($id);
    
            return $gliderByCategory;
        }
    }

    function showAboutUs() {
        $this->view->infoAboutUs($this->email);
    }
}

