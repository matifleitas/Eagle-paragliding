<?php

require_once'libs/smarty-4.2.1/libs/Smarty.class.php';

class CategoryView {
    private $smarty;

    function __construct()  {
        $this->smarty = new Smarty();
    }

    function showAllCategories($categories) {
        $this->smarty->assign('categories', $categories);
    }

    function GliderByCategory($categories) {
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('abm.gliderby-category.tpl');
    }
}