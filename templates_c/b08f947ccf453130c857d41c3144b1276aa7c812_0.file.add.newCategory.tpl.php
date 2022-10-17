<?php
/* Smarty version 4.2.1, created on 2022-10-14 19:08:48
  from 'C:\xampp\htdocs\dashboard\Projects\TPE-especial\templates\add.newCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634997a042f912_79727568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b08f947ccf453130c857d41c3144b1276aa7c812' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\Projects\\TPE-especial\\templates\\add.newCategory.tpl',
      1 => 1665766608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634997a042f912_79727568 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['email']->value) {?>
    <form action="addNewCategory" method="POST">
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Agregar nueva categoria: </label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="nameCategory" aria-describedby="emailHelp">

        <button type="submit" class="btn btn-primary">Agregar categoria</button>
    </form>
<?php }
}
}
