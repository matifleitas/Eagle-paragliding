<?php

require_once'libs/smarty-4.2.1/libs/Smarty.class.php';

class ParaglidingView {
    private $smarty;

    function __construct()  {
        $this->smarty = new Smarty();
    }

    function ShowHomeEagle() {
        $this->smarty->assign('fraseHome', 'Solo necesitamos ayuda para estar de pie, no para volar');
        $this->smarty->display('home.Eagle.tpl');
    }

    function GliderLists($gliders) {

        $this->smarty->assign('title', 'Velas de Eagle paragliding');
        $this->smarty->assign('gliders', $gliders);
        $this->smarty->display('abm.velas.tpl');
    }

    function infoAboutUs() {
        $this->smarty->display('about.us.tpl');
    }

}