<?php
/* Smarty version 4.2.1, created on 2022-10-11 20:51:30
  from 'C:\xampp\htdocs\dashboard\Projects\TPE-especial\templates\glider.byid.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6345bb32a7e046_15596507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd8419c92a63893a7389875f78c027269ddafa4f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\Projects\\TPE-especial\\templates\\glider.byid.tpl',
      1 => 1665434419,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6345bb32a7e046_15596507 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="card text-center" style="width: 50rem;">
  <img src="https://justacro.com/files/styles/video_preview/public/gear/glider/photo/image10dsc00216.jpg.res-800x600.jpg?itok=QCxvWndn" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['glider']->value->descritption;?>
</p>
  </div>
</div><?php }
}
