<?php
/* Smarty version 4.2.1, created on 2022-10-17 00:34:42
  from 'C:\xampp\htdocs\dashboard\Projects\TPE-especial\templates\abm.category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c87027faa48_64888991',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa827b53383848f57e6c81a711e2e748393e013d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\Projects\\TPE-especial\\templates\\abm.category.tpl',
      1 => 1665959666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634c87027faa48_64888991 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['email']->value) {?>
    <div>
        <h5>Categorias:</h5>
        <ul class="list-group list-group-numbered">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
            <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['category']->value->type_paraglider;?>

            <a href='editCategory/<?php echo $_smarty_tpl->tpl_vars['category']->value->id_category;?>
' type='button' class="btn btn-primary">Editar</a>
            <a href='deleteCategory/<?php echo $_smarty_tpl->tpl_vars['category']->value->id_category;?>
' type='button' class="btn btn-danger">Borrar</a>
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
<?php }
}
}
