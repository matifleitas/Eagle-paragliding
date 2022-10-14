<?php
/* Smarty version 4.2.1, created on 2022-10-13 23:59:08
  from 'C:\xampp\htdocs\dashboard\Projects\TPE-especial\templates\about.us.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63488a2c528374_37931232',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6600e383d049d0b26de324204391bb602abc2bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\Projects\\TPE-especial\\templates\\about.us.tpl',
      1 => 1665698346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_63488a2c528374_37931232 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
  <div class="card text-center" style="width: 50rem;">
    <img src="https://imagenes.heraldo.es/files/og_thumbnail/uploads/imagenes/2017/06/25/_parapentefotoheral24670213_6c605154.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['about']->value;?>
</p>
    </div>
  </div>
</div><?php }
}
