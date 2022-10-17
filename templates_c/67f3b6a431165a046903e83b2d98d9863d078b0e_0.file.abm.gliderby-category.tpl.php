<?php
/* Smarty version 4.2.1, created on 2022-10-17 02:16:39
  from 'C:\xampp\htdocs\dashboard\Projects\TPE-especial\templates\abm.gliderby-category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c9ee7c38d11_29776084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67f3b6a431165a046903e83b2d98d9863d078b0e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\Projects\\TPE-especial\\templates\\abm.gliderby-category.tpl',
      1 => 1665965797,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634c9ee7c38d11_29776084 (Smarty_Internal_Template $_smarty_tpl) {
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
      <h5><?php echo $_smarty_tpl->tpl_vars['category']->value->name;?>
:</h5>
      <div><img src="<?php echo $_smarty_tpl->tpl_vars['category']->value->image;?>
" class="rounded float-end" alt="..."></div>
      <span>
        ●Description: <p class="fw-semibold"><?php echo $_smarty_tpl->tpl_vars['category']->value->description;?>
</p> 
        <br>
        ●Dificultad: <p class="fw-semibold"><?php echo $_smarty_tpl->tpl_vars['category']->value->difficulty;?>
</p>
        <br> 
        ●Precio (USD): <p class="fw-semibold"><?php echo $_smarty_tpl->tpl_vars['category']->value->price;?>
</p>
      </span>
        
    </li>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
