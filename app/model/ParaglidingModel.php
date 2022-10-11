<?php
require_once'./app/model/MainModel.php';

class ParaglidingModel extends Model {

    public function getAllGliders() {
        $query = $this->db->prepare("SELECT * FROM parapentes");
        $query->execute();

        $gliders = $query->fetchAll(PDO::FETCH_OBJ);

        return $gliders;
    }

    public function getGliderbyId($id) {
        $query = $this->db->prepare("SELECT parapentes.name AS name, parapentes.type_paraglider AS type_paraglider, 
        parapentes.description AS description, parapentes.price AS price FROM parapentes JOIN categoria ON libros.id_autor_fk=autores.id_autor 
        WHERE id_libro = ?");        $query->execute([$id]);

        $glider = $query->fetch(PDO::FETCH_OBJ);

        return $glider;
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

    function addGliderByForm($id, $name, $category, $description, $difficulty, $price, $id_fk) {
        $query = $this->db->prepare("INSERT INTO parapentes (id_parapente, name, type_paraglider, description, difficulty, price, id_category_fk) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $query->execute([$id, $name, $category, $description, $difficulty, $price, $id_fk]);

        return $this->db->lastInsertId();
    }

    function editGliderById($id_paraglider, $name, $category, $description, $difficulty, $price, $id) {
        $query = $this->db->prepare('UPDATE parapentes SET id_parapente= ?,name= ?,type_paraglider= ?, description= ?, difficulty= ?, price= ? WHERE id_parapente= ?');
        $query->execute([$id_paraglider, $name, $category, $description, $difficulty, $price, $id]);
    }

} 