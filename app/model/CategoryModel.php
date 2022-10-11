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
        $query = $this->db->prepare('SELECT parapentes.name, parapentes.type_paraglider, parapentes.description, parapentes.difficulty, parapentes.price, categoria.type_paraglider
        FROM parapentes JOIN categoria
        ON parapentes.id_category_fk = categoria.id_category WHERE parapentes.id_category_fk = ?');

        $query->execute([$id]);   
        return $query->fetchAll(PDO::FETCH_OBJ);
    }


}