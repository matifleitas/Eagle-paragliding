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

    function addGliderByForm($name, $category, $description, $difficulty, $price, $id_fk, $image = null) {
        $pathImg = null;
        if($image)
            $pathImg = $this->uploadImage($image);

        $query = $this->db->prepare("INSERT INTO parapentes (name, type_paraglider, description, difficulty, price, id_category_fk, image) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $query->execute([$name, $category, $description, $difficulty, $price, $id_fk, $pathImg]);

        return $this->db->lastInsertId();
    }

    private function uploadImage($image) {
        $target = 'images/' . uniqid() . '.jpg' . '.jpeg' . '.png';
        move_uploaded_file($image, $target);
        return $target;
    }

    function editGliderById($id) {
        $query = $this->db->prepare('SELECT id_parapente, name, type_paraglider, description, difficulty, price, id_category_fk, image FROM parapentes WHERE id_parapente= ?');

        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    function getAllGlidersByCategory($id) {
        $query = $this->db->prepare('SELECT * FROM parapentes WHERE id_category_fk = ?');
        $query->execute([$id]);

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function updateGliderById($id, $name, $category, $description, $difficulty, $price, $id_fk, $image = null) {
        $pathImg = null;
        if($image)
            $pathImg = $this->uploadImage($image);

            
        $query = $this->db->prepare("UPDATE parapentes SET  name = ?,  type_paraglider = ?, description = ?, difficulty = ?, price = ?, id_category_fk= ?, image = ? WHERE id_parapente = ? ");
        $query->execute([$name, $category, $description, $difficulty, $price, $id_fk, $pathImg, $id]);

        return $this->db->lastInsertId();
    }
} 