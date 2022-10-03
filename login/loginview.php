<?php

require_once'libs/smarty-4.2.1/libs/Smarty.class.php';

class LoginView {
    private $smarty;

    function __construct()  {
        $this->smarty = new Smarty();
    }

    function Home() {
        $this->smarty->display('templates/header.php');
        $this->smarty->display('loginAdmin.php');
        $this->smarty->display('templates/footer.php');
    }

    function GliderLists() {
        $this->smarty->display(/*aca tiro la lista de velas que voy a tener en la page*/);
    }

    function infoAboutUs() {
    $this->smarty->display(/*archivo de la info de nostros*/);
    }
}

