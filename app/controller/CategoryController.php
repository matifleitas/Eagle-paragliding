<?php 

require_once'app/model/CategoryModel.php';
require_once'app/view/CategoryView.php';


class CategoryController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new CategoryModel();
        $this->view = new CategoryView();
    }

    function Categories() {
        $categories= $this->model->getAllCategories();
        $this->view->showAllCategories($categories);
    }

    function showByCategory($id) {
        $categories= $this->model->getGliderById($id);
        $this->view->GliderByCategory($categories);

    }
}