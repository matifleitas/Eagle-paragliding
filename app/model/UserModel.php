<?php

require_once'app/model/MainModel.php';

class UserModel extends Model{

    public function UserByEmail($email) {
        $query = $this->db->prepare('SELECT * FROM administrator WHERE email = ?');
        $query->execute([$email]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
}