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

    function GliderByCategory($categoriesId, $categories, $email = null) {
        $this->smarty->assign('email', $email);
        $this->smarty->assign('categoriesId', $categoriesId);
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('abm.gliderby-category.tpl');
    }

    function showError($error, $categories, $email = null) {
        $this->smarty->assign('email', $email);
        $this->smarty->assign('categories', $categories);
        $this->smarty->assign('error', $error);
        $this->smarty->display('error.tpl');
    }

    function showFormUpdateCategory($gliders, $categoriesId, $categories, $email = null) {
        $this->smarty->assign('gliders', $gliders);
        $this->smarty->assign('email', $email);
        $this->smarty->assign('categoriesId', $categoriesId);
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('form.updateCategory.tpl');
    }
}