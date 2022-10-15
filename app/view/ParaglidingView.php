<?php

require_once'libs/smarty-4.2.1/libs/Smarty.class.php';

class ParaglidingView {
    private $smarty;

    function __construct()  {
        $this->smarty = new Smarty();
    }

    function ShowHomeEagle($categories, $email = null) {
        $this->smarty->assign('email', $email);
        $this->smarty->assign('phraseHome', 'Solo necesitamos ayuda para estar de pie, no para volar');
        $this->smarty->assign('tienda', 'Tienda online de velas de parapentes');
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('home.Eagle.tpl');
    }

    function GliderById($glider, $email = null) {
        $this->smarty->assign('email', $email);
        $this->smarty->assign('glider', $glider);
        $this->smarty->display('glider.byid.tpl');
    }

    function GliderLists($gliders, $categories, $email = null) {
        $this->smarty->assign('email', $email);
        $this->smarty->assign('title', 'Velas de Eagle paragliding');
        $this->smarty->assign('gliders', $gliders);
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('header.tpl');
        $this->smarty->display('form.gliders.tpl');
        $this->smarty->display('abm.category.tpl');
        $this->smarty->display('add.newCategory.tpl');
        $this->smarty->display('abm.velas.tpl');
    }

    function showUpdateForm($glider, $categories, $email = null){
        $this->smarty->assign('email', $email);
        $this->smarty->assign('glider', $glider);
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('header.tpl');
        $this->smarty->display('form.update.tpl');
        $this->smarty->display('footer.tpl');
    }

    function showError($error) {
        $this->smarty->assign('error', $error);
        $this->smarty->display('error.tpl');
    }

    function infoAboutUs($email = null) {
        $this->smarty->assign('email', $email);
        $this->smarty->assign('about', 'Somos un equipo de parapentistas Olavarrienses el cual vendemos productos de parapente en Tandil para la promulgacion de este hermoso deporte');
        $this->smarty->display('about.us.tpl');

    }

}