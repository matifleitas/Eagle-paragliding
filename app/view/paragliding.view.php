<?php

require_once'libs/smarty-4.2.1/libs/Smarty.class.php';

class ParaglidingView {
    private $smarty;

    function __construct()  {
        $this->smarty = new Smarty();
    }


    function GliderLists($gliders) {

        $this->smarty->assign('title', 'Velas de Eagle paragliding');
        $this->smarty->assign('gliders', $gliders);
        $this->smarty->display('abm.velas.tpl');
    }

//     function infoAboutUs() {
//         $this->smarty->display(/*archivo de la info de nostros*/);
//     }
// }

}