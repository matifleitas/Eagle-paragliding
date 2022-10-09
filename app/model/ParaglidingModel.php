<?php
require_once'./app/model/MainModel.php';

class ParaglidingModel extends Model{

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

    function editGliderById($name, $description, $difficulty, $price, $id) {
        $query = $this->db->prepare('UPDATE parapentes SET name= ?,description= ?, difficulty= ?, price= ? WHERE id_parapente = ?');
        $query->execute([$name, $description, $difficulty, $price, $id]);
    }

}