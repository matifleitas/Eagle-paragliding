<?php

class AdminHelper {

    public function askAdminIsLogged() {
        if(!isset($_SESSION['EMAIL_USER'])) {
            session_start();
        }
    }
}
