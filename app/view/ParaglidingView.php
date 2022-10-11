<?php

require_once'libs/smarty-4.2.1/libs/Smarty.class.php';

class ParaglidingView {
    private $smarty;

    function __construct()  {
        $this->smarty = new Smarty();
    }

    function ShowHomeEagle() {
        $this->smarty->assign('phraseHome', 'Solo necesitamos ayuda para estar de pie, no para volar');
        $this->smarty->assign('tienda', 'Tienda online de velas de parapentes');
        $this->smarty->display('home.Eagle.tpl');
    }

    function GliderById($glider) {
        $this->smarty->assign('glider', $glider);
        $this->smarty->display('glider.byid.tpl');
    }

    function GliderLists($gliders, $categories) {

        $this->smarty->assign('title', 'Velas de Eagle paragliding');
        $this->smarty->assign('gliders', $gliders);
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('abm.velas.tpl');
    }

    // function GlidersCategory ($categories) {
    //     $this->smarty->assign('categories', $categories);
    //     $this->smarty->display('abm.gliderby-category.tpl');
    // }

    function showFormsGliders() {
        $this->smarty->display('form.glider.tpl');
    }

    function infoAboutUs() {
        $this->smarty->display('about.us.tpl');
    }

}