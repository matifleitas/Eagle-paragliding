<?php

class Model{

protected $db;

function __construct(){
    $this->db = $this->connect();
}

function connect(){
    return new PDO('mysql:host=localhost;'.'dbname=eagle;charset=utf8', 'root', '');
}
}