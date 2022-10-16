<?php 

require_once'app/model/CategoryModel.php';
require_once'app/view/CategoryView.php';
require_once'app/helpers/AdminHelper.php';

class CategoryController {
    private $model;
    private $view;
    private $categoryModel; 
    private $email;
    private $helper;

    public function __construct() {
        $this->model = new CategoryModel();
        $this->view = new CategoryView();
        $this->categoryModel = new CategoryModel();
        $this->helper = new AdminHelper();
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

    function showFormUpdateCategory($id) {
        $categories= $this->model->getAllCategories();
        $categoriesId= $this->model->getCategoryById($id);

        $this->view->showFormUpdateCategory($categoriesId, $categories, $this->email);
    }

    function sendCategoryUpdated($id) {
        $this->helper->askAdminIsLogged();
        $nameUpdatedCategory=$_POST['editCategory'];

        $this->model->updateCategoryById($id, $nameUpdatedCategory);
        header("Location: " . BASE_URL . "gliders");
    }

    function deleteCategoryById($id, $gliders) {
        $this->helper->askAdminIsLogged();
        $categories= $this->model->getAllCategories();
        if (empty($gliders)) {
            if(isset($id)) {
                $result=$this->model->deleteCategory($id);

                header("Location: " . BASE_URL . "gliders");
            }
            else {
                $this->view->showError("Error al intentar eliminar la categoria", $categories, $this->email);
            }
        }
        else {
            $this->view->showError("Error al intentar borrar una categoria, para poder hacerlo se deberan borrar los productos asignados en ella.", $categories, $this->email);
        }
    }

    function addCategory() {
        $this->helper->askAdminIsLogged();
        $nameCategory=$_POST['nameCategory'];
        $this->model->addCategoryByForm($nameCategory);
        
        header("Location: " . BASE_URL . "gliders");
    }
}