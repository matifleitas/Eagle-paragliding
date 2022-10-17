<?php
/* Smarty version 4.2.1, created on 2022-10-17 04:26:22
  from 'C:\xampp\htdocs\dashboard\Projects\TPE-especial\templates\abm.velas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634cbd4e579004_82819807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6487c58a26c3c4f4ffe1c8fccc40ae687b9237f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\Projects\\TPE-especial\\templates\\abm.velas.tpl',
      1 => 1665973569,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634cbd4e579004_82819807 (Smarty_Internal_Template $_smarty_tpl) {
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
      <a href="glider/<?php echo $_smarty_tpl->tpl_vars['glider']->value->id_parapente;?>
" class="fw-bold"><?php echo $_smarty_tpl->tpl_vars['glider']->value->name;?>
: </a> 
      <?php if ((isset($_smarty_tpl->tpl_vars['glider']->value->image))) {?>
        <div><img src="<?php echo $_smarty_tpl->tpl_vars['glider']->value->image;?>
" class="img-thumbnail" alt="..."></div>
      <?php }?>
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
          ●Precio (USD): <p class="fw-semibold"><?php echo $_smarty_tpl->tpl_vars['glider']->value->price;?>
</p>
        </span>
      <?php if ($_smarty_tpl->tpl_vars['email']->value) {?>
        <a href='edit/<?php echo $_smarty_tpl->tpl_vars['glider']->value->id_parapente;?>
' type='button' class="btn btn-primary">Editar</a>
        <a href='delete/<?php echo $_smarty_tpl->tpl_vars['glider']->value->id_parapente;?>
' type='button' class="btn btn-danger">Borrar</a>
      <?php }?>
    </li>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
