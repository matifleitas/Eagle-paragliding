<?php

class UserModel {
     
    private $db;
    
    public function __constuct()  {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=eagle;charset=utf8', 'root', '');
    }

    public function UserByEmail($email) {
        $query = $this->db->prepare("SELECT * FROM admin WHERE email = ?");
        $query->execute([$email]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
}