<?php

require_once'libs/smarty-4.2.1/libs/Smarty.class.php';

class ParaglidingView {
    private $smarty;

    function __construct()  {
        $this->smarty = new Smarty();
    }

    function Home() {

        $loginAdmin[] =  


        $this->smarty->display('templates/header.tpl');
        $this->smarty->assign('login', $loginAdmin);

        $this->smarty->display('templates/homeLogin.tpl');
        $this->smarty->display('templates/footer.tpl');
    }

    function GliderLists() {
        $this->smarty->display(/*aca tiro la lista de velas que voy a tener en la page*/);
    }

    function infoAboutUs() {
        $this->smarty->display(/*archivo de la info de nostros*/);
    }
}

