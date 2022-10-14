<?php 

require_once'app/model/CategoryModel.php';
require_once'app/view/CategoryView.php';


class CategoryController {
    private $model;
    private $view;
    private $categoryModel; 
    private $email;

    public function __construct() {
        $this->model = new CategoryModel();
        $this->view = new CategoryView();
        $this->categoryModel = new CategoryModel();
        session_start();
        $this->setEmail();
    }

    function setEmail() {
        if (isset ($_SESSION['EMAIL_USER'])){
            $this->email=$_SESSION['EMAIL_USER'];
        }
    }

    function Categories() {
        $categories= $this->model->getAllCategories();
        $this->view->showAllCategories($categories);
    }

    function showByCategory($id) {
        $categoriesId= $this->model->getGliderById($id);
        $categories= $this->model->getAllCategories();
        $this->view->GliderByCategory($categoriesId, $categories, $this->email);

    }

    function addCategory() {
        $nameCategory=$_POST['nameCategory'];
        $this->model->addCategoryByForm($nameCategory);
        
        header("Location: " . BASE_URL . "home");
    }
}