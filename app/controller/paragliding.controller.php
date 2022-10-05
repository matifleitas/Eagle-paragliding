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

    function showLogin() { 
        $this->view->Home(); 
        //model
    }

    function showGliders() {
        $this->view->GliderLists();
        //model
    }

    function showAboutUs() {
        $this->view->infoAboutUs();
        //model
    }
}