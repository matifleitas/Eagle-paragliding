<?php

require_once'app/model/paragliding.model.php';
require_once'app/view/paragliding.view.php';

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
    // }

    function showGliders() {
        $gliders=$this->model->getAllGliders();
        $this->view->GliderLists($gliders);
    }

    function deleteGlider($id) {
        $this->model->deleteGliderById($id);
        header("Location: " . BASE_URL);
    }


    // function showAboutUs() {
    //     $this->view->infoAboutUs();
    //     //model
    // }
}