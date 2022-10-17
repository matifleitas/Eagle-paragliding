<?php
require_once'./app/model/MainModel.php';

class ParaglidingModel extends Model {

    public function getAllGliders() {
        $query = $this->db->prepare('SELECT parapentes.id_parapente, parapentes.name, parapentes.description, parapentes.image, parapentes.difficulty, parapentes.price, categoria.type_paraglider
        FROM parapentes JOIN categoria
        ON parapentes.id_category_fk = categoria.id_category ');
        $query->execute();

        $gliders = $query->fetchAll(PDO::FETCH_OBJ);

        return $gliders;
    }

    function getOneGliderById($id) {
        $query = $this->db->prepare('SELECT parapentes.id_parapente, parapentes.name, parapentes.description, parapentes.image, parapentes.difficulty, parapentes.price, categoria.type_paraglider
        FROM parapentes JOIN categoria
        ON parapentes.id_category_fk = categoria.id_category WHERE parapentes.id_parapente = ?');
        $query->execute([$id]);   
        
        return $query->fetch(PDO::FETCH_OBJ);
    }

    function deleteGliderById($id) {
        $query = $this->db->prepare('DELETE FROM parapentes WHERE id_parapente = ?');
        $query->execute([$id]);
    }

    function addGliderByForm($name, $category, $description, $difficulty, $price, $image = null) {
        $pathImg = null;
        if($image)
            $pathImg = $this->uploadImage($image);

        $query = $this->db->prepare("INSERT INTO parapentes (name, description, difficulty, price, image, id_category_fk) VALUES (?, ?, ?, ?, ?, ?)");
        $query->execute([$name, $description, $difficulty, $price, $pathImg, $category]);

        return $this->db->lastInsertId();
    }

    private function uploadImage($image) {
        $target = 'images/' . uniqid() . '.jpg' . '.jpeg' . '.png';
        move_uploaded_file($image, $target);
        return $target;
    }

    function editGliderById($id) {
        $query = $this->db->prepare('SELECT id_parapente, name, description, difficulty, price, id_category_fk, image FROM parapentes WHERE id_parapente= ?');

        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    function getAllGlidersByCategory($id) {
        $query = $this->db->prepare('SELECT * FROM parapentes WHERE id_category_fk = ?');
        $query->execute([$id]);

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function updateGliderById($id, $name, $category, $description, $difficulty, $price, $image = null) {
        $pathImg = null;
        if($image)
            $pathImg = $this->uploadImage($image);

            
        $query = $this->db->prepare("UPDATE parapentes SET  name = ?, description = ?, difficulty = ?, price = ?, image = ?, id_category_fk= ?  WHERE id_parapente = ? ");
        $query->execute([$name, $description, $difficulty, $price, $pathImg, $category, $id]);

        return $this->db->lastInsertId();
    }
} 