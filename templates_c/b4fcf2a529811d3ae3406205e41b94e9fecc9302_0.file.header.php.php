<?php
/* Smarty version 4.2.1, created on 2022-10-03 17:09:01
  from 'C:\xampp\htdocs\dashboard\Projects\TPE-especial\templates\header.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633afb0df333d5_54975535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4fcf2a529811d3ae3406205e41b94e9fecc9302' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\Projects\\TPE-especial\\templates\\header.php',
      1 => 1664809739,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633afb0df333d5_54975535 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
    <title>Eagle</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Eagle Paragliding</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#"> Home </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#"> Velas </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#"> Quienes somos </a>
        </li>
    </ul>
  <form>
  <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresar Email">
      <!-- <div id="emailHelp" class="form-text">.</div> -->
  </div>
  <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingresar contraseña">
      <span id="passwordHelpInline" class="form-text">
      Permitido entre 8 y 20 caracrteres.
      </span>
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">No soy un robot</label>
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</nav>



<?php }
}
