<?php 

require_once'app/model/CategoryModel.php';
require_once'app/view/CategoryView.php';


class CategoryController {
    private $model;
    private $view;
    private $categoryModel; 

    public function __construct() {
        $this->model = new CategoryModel();
        $this->view = new CategoryView();
        $this->categoryModel = new CategoryModel();
    }

    function Categories() {
        $categories= $this->model->getAllCategories();
        $this->view->showAllCategories($categories);
    }

    function showByCategory($id) {
        $categoriesId= $this->model->getGliderById($id);
        $categories= $this->model->getAllCategories();
        $this->view->GliderByCategory($categoriesId, $categories);

    }
}