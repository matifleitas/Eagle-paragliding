<?php
require_once'./app/model/MainModel.php';

class ParaglidingModel extends Model {

    public function getAllGliders() {
        $query = $this->db->prepare("SELECT * FROM parapentes");
        $query->execute();

        $gliders = $query->fetchAll(PDO::FETCH_OBJ);

        return $gliders;
    }

    public function getGlidersCategory($id) {
        $query = $this->db->prepare('SELECT a.* FROM parapentes a
        INNER JOIN categoria b ON a.type_paraglider = b.type_paraglider
        WHERE b.type_paraglider = ?');
        $query -> execute([$id]);
        return $query->fetchAll(PDO::FETCH_OBJ);

    }

    // public function getGliderbyId($id) {

    //     $query = $this->db->prepare('SELECT name, description, difficulty, price FROM parapentes WHERE id_parapente = ?');
    //     $query -> execute([$id]);
    //     return $query->fetch(PDO::FETCH_OBJ);
    // }

    function deleteGliderById($id) {
        $query = $this->db->prepare('DELETE FROM parapentes WHERE id_parapente = ?');
        $query->execute([$id]);
    }

    function addGliderByForm($id, $name, $category, $description, $difficulty, $price) {
        $query = $this->db->prepare("INSERT INTO parapentes (id_parapente, name, type_paraglider, description, difficulty, price) VALUES (?, ?, ?, ?, ?, ?)");
        $query->execute([$id, $name, $category, $description, $difficulty, $price]);

        return $this->db->lastInsertId();
    }

    // function editGliderById($name, $description, $difficulty, $price, $id) {
    //     $query = $this->db->prepare('UPDATE parapentes SET name= ?,description= ?, difficulty= ?, price= ? WHERE id_parapente = ?');
    //     $query->execute([$name, $description, $difficulty, $price, $id]);
    // }

} 