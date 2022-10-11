<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class UserView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); 
    }

    function FormLogin($categories, $error = null) {
        $this->smarty->assign("error", $error);
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('login.user.tpl');
    }
}
