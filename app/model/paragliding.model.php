<?php

class ParaglidingModel {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=eagle;charset=utf8', 'root', '');
    }

    public function getAllGliders() {
        $query = $this->db->prepare("SELECT * FROM parapentes");
        $query->execute();

        $gliders = $query->fetchAll(PDO::FETCH_OBJ);

        return $gliders;
    }

    
    // public function getGliderbyId($id) {

    //     $query = $this->db->prepare('SELECT name, description, difficulty, price FROM parapentes WHERE id = ?');
    //     $query -> execute([$id]);
    //     return $query->fetch(PDO::FETCH_OBJ);
    // }

    function deleteGliderById($id) {
        $query = $this->db->prepare('DELETE FROM parapentes WHERE id_parapente = ?');
        $query->execute([$id]);
    }

}