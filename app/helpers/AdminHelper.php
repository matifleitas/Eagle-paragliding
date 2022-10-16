<?php

class AdminHelper {

    public function checkLoggedIn() {
        session_start();
        if (!isset($_SESSION['EMAIL_USER'])) {
            header("Location: " . BASE_URL . 'login');
            die();
        }
    } 

    public function askAdminIsLogged() {
        if(!isset($_SESSION['EMAIL_USER'])) {
            session_start();
        }
    }
}
