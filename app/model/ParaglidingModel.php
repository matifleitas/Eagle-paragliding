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
        $query = $this->db->prepare('SELECT parapentes.name, parapentes.type_paraglider, parapentes.description, parapentes.difficulty, parapentes.price, categoria.type_paraglider
        FROM parapentes JOIN categoria
        ON parapentes.id_category_fk = categoria.id_category WHERE parapentes.id_category_fk = ?');

        $query->execute([$id]);   
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    // public function getGlidersCategory($id) {
    //     $query = $this->db->prepare('SELECT a.id_parapente, a.name, a.type_paraglider, a.description, a.price AS categoria
    //     FROM parapentes a
    //     INNER JOIN categoria b
    //     ON a.type_paraglider = b.type_paraglider WHERE b.id_category = ?');
    //     $query -> execute([$id]);
    //     return $query->fetchAll(PDO::FETCH_OBJ);

    // }

    function deleteGliderById($id) {
        $query = $this->db->prepare('DELETE FROM parapentes WHERE id_parapente = ?');
        $query->execute([$id]);
    }

    function addGliderByForm($id, $name, $category, $description, $url, $difficulty, $price, $id_fk) {
        $query = $this->db->prepare("INSERT INTO parapentes (id_parapente, name, type_paraglider, description, image, difficulty, price, id_category_fk) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $query->execute([$id, $name, $category, $description, $url, $difficulty, $price, $id_fk]);

        return $this->db->lastInsertId();
    }

    function editGliderById($id) {
        $query = $this->db->prepare('SELECT id_parapente, name, type_paraglider, description, image, difficulty, price, id_category_fk FROM parapentes WHERE id_parapente= ?');

        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    function updateGliderById($id, $name, $category, $description, $url, $difficulty, $price, $id_fk){
        $query = $this->db->prepare("UPDATE parapentes SET  name = ?,  type_paraglider = ?, description = ?, image = ?, difficulty = ?, price = ?, id_category_fk= ? WHERE id_parapente = ? ");
        $query->execute([$name, $category, $description, $url, $difficulty, $price, $id_fk, $id]);
    }

} 