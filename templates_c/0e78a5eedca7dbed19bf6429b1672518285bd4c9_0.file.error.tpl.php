<?php
/* Smarty version 4.2.1, created on 2022-10-16 01:59:16
  from 'C:\xampp\htdocs\dashboard\Projects\TPE-especial\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634b4954bcefb4_18468447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e78a5eedca7dbed19bf6429b1672518285bd4c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\Projects\\TPE-especial\\templates\\error.tpl',
      1 => 1665878354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_634b4954bcefb4_18468447 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="alert alert-danger" role="alert">
  <p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
</div><?php }
}
