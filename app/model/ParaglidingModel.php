<?php
require_once'./app/model/MainModel.php';

class ParaglidingModel extends Model{

    public function getAllGliders() {
        $query = $this->db->prepare("SELECT * FROM parapentes");
        $query->execute();

        $gliders = $query->fetchAll(PDO::FETCH_OBJ);

        return $gliders;
    }

    public function getGliderbyId($id) {

        $query = $this->db->prepare('SELECT name, description, difficulty, price FROM parapentes WHERE id_parapente = ?');
        $query -> execute([$id]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    function deleteGliderById($id) {
        $query = $this->db->prepare('DELETE FROM parapentes WHERE id_parapente = ?');
        $query->execute([$id]);
    }

    function addGliderByForm($name, $description, $difficulty, $price) {
        $query = $this->db->prepare("INSERT INTO parapentes (name, description, difficulty, price) VALUES (?, ?, ?, ?)");
        $query->execute([$name, $description, $difficulty, $price]);

        return $this->db->lastInsertId();
    }

    // function editGliderById($name, $description, $difficulty, $price, $id) {
    //     $query = $this->db->prepare('UPDATE parapentes SET name= ?,description= ?, difficulty= ?, price= ? WHERE id_parapente = ?');
    //     $query->execute([$name, $description, $difficulty, $price, $id]);
    // }

} 