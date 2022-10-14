<?php
/* Smarty version 4.2.1, created on 2022-10-14 04:28:57
  from 'C:\xampp\htdocs\dashboard\Projects\TPE-especial\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6348c969102dd5_59874613',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c85826b349caf7ac0dc7ac914d8ceb101907100' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\Projects\\TPE-especial\\templates\\header.tpl',
      1 => 1665714535,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6348c969102dd5_59874613 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>

    <base href="<?php echo BASE_URL;?>
">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css"> 
    
    <title>Eagle</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> Eagle Paragliding </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="home"> Home </a>
        </li>

        <li class="nav-item dropdown" >
            <a class="nav-link dropdown-toggle" href="gliders" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Velas
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="gliders">Todas</a></li>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                    <li><a class="dropdown-item" href="category/<?php echo $_smarty_tpl->tpl_vars['category']->value->id_category;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value->type_paraglider;?>
</a></li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </li>
        <?php if (!$_smarty_tpl->tpl_vars['email']->value) {?>
            <li class="nav-item">
                <a class="nav-link" href="login"> Login </a>
            </li>
        <?php } else { ?> 
            <li class="nav-item">
                <a class="nav-link" href="logout"> logout - <?php echo $_smarty_tpl->tpl_vars['email']->value;?>
 </a>
            </li>
        <?php }?>
        <li class="nav-item">
            <a class="nav-link" href="about-us"> Quienes somos </a>
        </li>
    </ul>
</div>
</nav>



<?php }
}
