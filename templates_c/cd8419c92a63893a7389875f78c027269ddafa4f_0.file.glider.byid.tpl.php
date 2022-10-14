<?php
/* Smarty version 4.2.1, created on 2022-10-13 17:53:10
  from 'C:\xampp\htdocs\dashboard\Projects\TPE-especial\templates\glider.byid.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63483466982f90_08061787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd8419c92a63893a7389875f78c027269ddafa4f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\Projects\\TPE-especial\\templates\\glider.byid.tpl',
      1 => 1665676386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_63483466982f90_08061787 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
  <div class="card text-center" style="width: 40rem;">
    <h1> <?php echo $_smarty_tpl->tpl_vars['glider']->value->name;?>
 </h1>
      <div><img src="<?php echo $_smarty_tpl->tpl_vars['glider']->value->image;?>
" class="img-thumbnail" alt="..."></div>
      <span class="fw-bold">
        ●Categoria de la vela: <p class="fw-semibold"><?php echo $_smarty_tpl->tpl_vars['glider']->value->type_paraglider;?>
</p> 
        <br>
        ●Description: <p class="fw-semibold"><?php echo $_smarty_tpl->tpl_vars['glider']->value->description;?>
</p> 
        <br>
        ●Dificultad: <p class="fw-semibold"><?php echo $_smarty_tpl->tpl_vars['glider']->value->difficulty;?>
</p>
        <br> 
        ●Precio: <p class="fw-semibold"><?php echo $_smarty_tpl->tpl_vars['glider']->value->price;?>
</p>
      </span>
    </div>
  </div>
</div><?php }
}
