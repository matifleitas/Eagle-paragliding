<?php
require_once'./app/model/MainModel.php';

class ParaglidingModel extends Model {

    public function getAllGliders() {
        $query = $this->db->prepare("SELECT * FROM parapentes");
        $query->execute();

        $gliders = $query->fetchAll(PDO::FETCH_OBJ);

        return $gliders;
    }

    function getOneGliderById($id) {
        $query = $this->db->prepare('SELECT id_parapente, name, type_paraglider, description, image, difficulty, price  FROM parapentes WHERE id_parapente = ?');
        $query->execute([$id]);   
        
        return $query->fetch(PDO::FETCH_OBJ);
    }

    function deleteGliderById($id) {
        $query = $this->db->prepare('DELETE FROM parapentes WHERE id_parapente = ?');
        $query->execute([$id]);
    }

    function addGliderByForm($name, $category, $description, $url, $difficulty, $price, $id_fk) {
        $query = $this->db->prepare("INSERT INTO parapentes (name, type_paraglider, description, image, difficulty, price, id_category_fk) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $query->execute([$name, $category, $description, $url, $difficulty, $price, $id_fk]);

        return $this->db->lastInsertId();
    }

    function editGliderById($id) {
        $query = $this->db->prepare('SELECT id_parapente, name, type_paraglider, description, image, difficulty, price, id_category_fk FROM parapentes WHERE id_parapente= ?');

        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    function getAllGlidersByCategory($id) {
        
    }

    function updateGliderById($id, $name, $category, $description, $url, $difficulty, $price, $id_fk){
        $query = $this->db->prepare("UPDATE parapentes SET  name = ?,  type_paraglider = ?, description = ?, image = ?, difficulty = ?, price = ?, id_category_fk= ? WHERE id_parapente = ? ");
        $query->execute([$name, $category, $description, $url, $difficulty, $price, $id_fk, $id]);
    }

} 