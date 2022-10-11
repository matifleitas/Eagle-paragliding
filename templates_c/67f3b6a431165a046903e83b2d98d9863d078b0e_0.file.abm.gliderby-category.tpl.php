<?php
/* Smarty version 4.2.1, created on 2022-10-11 04:26:15
  from 'C:\xampp\htdocs\dashboard\Projects\TPE-especial\templates\abm.gliderby-category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6344d447e85e03_86533138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67f3b6a431165a046903e83b2d98d9863d078b0e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\Projects\\TPE-especial\\templates\\abm.gliderby-category.tpl',
      1 => 1665455173,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6344d447e85e03_86533138 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="display-6"></h1>
  <ul class="list-group list-group-numbered">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categoriesId']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
      
    <li class="list-group-item d-flex justify-content-between align-items-start">
      <a href="glider"><?php echo $_smarty_tpl->tpl_vars['category']->value->name;?>
:</a> 
      <div><img src="https://justacro.com/files/styles/video_preview/public/gear/glider/photo/image10dsc00216.jpg.res-800x600.jpg?itok=QCxvWndn" class="rounded float-end" alt="..."></div>
          <span><?php echo $_smarty_tpl->tpl_vars['category']->value->description;?>
 - Dificultad: <?php echo $_smarty_tpl->tpl_vars['category']->value->difficulty;?>
 - Precio: <?php echo $_smarty_tpl->tpl_vars['category']->value->price;?>
</span>
        
    </li>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
