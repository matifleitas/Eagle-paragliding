<?php
/* Smarty version 4.2.1, created on 2022-10-09 18:11:40
  from 'C:\xampp\htdocs\dashboard\Projects\TPE-especial\templates\abm.velas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6342f2bc163568_90319069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6487c58a26c3c4f4ffe1c8fccc40ae687b9237f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\Projects\\TPE-especial\\templates\\abm.velas.tpl',
      1 => 1665331898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:form.gliders.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6342f2bc163568_90319069 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:form.gliders.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="display-6"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
  <ul class="list-group list-group-numbered">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gliders']->value, 'glider');
$_smarty_tpl->tpl_vars['glider']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['glider']->value) {
$_smarty_tpl->tpl_vars['glider']->do_else = false;
?>
      
    <li class="list-group-item d-flex justify-content-between align-items-start">
      <a href="glider"><?php echo $_smarty_tpl->tpl_vars['glider']->value->name;?>
:</a> 
      <div><img src="https://justacro.com/files/styles/video_preview/public/gear/glider/photo/image10dsc00216.jpg.res-800x600.jpg?itok=QCxvWndn" class="rounded float-end" alt="..."></div>
          <span><?php echo $_smarty_tpl->tpl_vars['glider']->value->description;?>
 - Dificultad: <?php echo $_smarty_tpl->tpl_vars['glider']->value->difficulty;?>
 - Precio: <?php echo $_smarty_tpl->tpl_vars['glider']->value->price;?>
</span>
      
      <a href='edit/<?php echo $_smarty_tpl->tpl_vars['glider']->value->id_parapente;?>
' type='button' class="btn btn-outline-primary">Editar</a>
      <a href='delete/<?php echo $_smarty_tpl->tpl_vars['glider']->value->id_parapente;?>
' type='button' class="btn btn-outline-danger">Borrar</a>

    </li>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
