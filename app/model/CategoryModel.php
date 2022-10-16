<?php
require_once 'app/model/MainModel.php';

class CategoryModel extends Model {

    function getAllCategories() {
        $query = $this->db->prepare("SELECT * FROM categoria");
        $query->execute();

        $categorias = $query->fetchAll(PDO::FETCH_OBJ);

        return $categorias;
    }

    function getGliderById($id) {
        $query = $this->db->prepare('SELECT parapentes.name, parapentes.type_paraglider, parapentes.description, parapentes.image, parapentes.difficulty, parapentes.price, categoria.type_paraglider
        FROM parapentes JOIN categoria
        ON parapentes.id_category_fk = categoria.id_category WHERE parapentes.id_category_fk = ?');

        $query->execute([$id]);   
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function getCategoryById($id) {
        $query = $this->db->prepare('SELECT * FROM categoria WHERE id_category = ?');
        $query->execute([$id]);   
        
        return $query->fetch(PDO::FETCH_OBJ);
    }

    function updateCategoryById($id, $nameUpdatedCategory) {
        $query = $this->db->prepare("UPDATE categoria SET type_paraglider = ? WHERE id_category = ? ");
        $query->execute([$nameUpdatedCategory, $id]);
    }

    function deleteCategory($id) {
        $query = $this->db->prepare('DELETE FROM categoria WHERE id_category = ?');
        $query->execute([$id]); 
    }

    function addCategoryByForm($nameCategory) {
        $query = $this->db->prepare('INSERT INTO categoria (type_paraglider) VALUES (?)');
        $query -> execute([$nameCategory]);

    }
}