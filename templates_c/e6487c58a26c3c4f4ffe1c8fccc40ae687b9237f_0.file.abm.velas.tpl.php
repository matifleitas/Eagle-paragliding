<?php
/* Smarty version 4.2.1, created on 2022-10-07 18:20:38
  from 'C:\xampp\htdocs\dashboard\Projects\TPE-especial\templates\abm.velas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634051d65c6ed0_24676988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6487c58a26c3c4f4ffe1c8fccc40ae687b9237f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\Projects\\TPE-especial\\templates\\abm.velas.tpl',
      1 => 1665159636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_634051d65c6ed0_24676988 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<ul class="list-group list-group-numbered">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gliders']->value, 'glider');
$_smarty_tpl->tpl_vars['glider']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['glider']->value) {
$_smarty_tpl->tpl_vars['glider']->do_else = false;
?>
    
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
    <div class="fw-bold"><?php echo $_smarty_tpl->tpl_vars['glider']->value->name;?>
</div>
        <?php echo $_smarty_tpl->tpl_vars['glider']->value->description;?>
 : (dificultad: <?php echo $_smarty_tpl->tpl_vars['glider']->value->difficulty;?>
) : (precio: <?php echo $_smarty_tpl->tpl_vars['glider']->value->price;?>
)
    </div>

    <a href='edit/<?php echo $_smarty_tpl->tpl_vars['glider']->value->name;?>
' type='button' class='btn btn-success'>Editar</a>
    <a href='delete/<?php echo $_smarty_tpl->tpl_vars['glider']->value->name;?>
' type='button' class='btn btn-danger'>Borrar</a>

  </li>

  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
    <div class="fw-bold"><?php echo $_smarty_tpl->tpl_vars['glider']->value->id_parapente;?>
</div> 
        <?php echo $_smarty_tpl->tpl_vars['glider']->value->description;?>
 : (dificultad: <?php echo $_smarty_tpl->tpl_vars['glider']->value->difficulty;?>
) : (precio: <?php echo $_smarty_tpl->tpl_vars['glider']->value->price;?>
)
    </div>

    <a href='edit/<?php echo $_smarty_tpl->tpl_vars['glider']->value->id_parapente;?>
' type='button' class='btn btn-success'>Editar</a>
    <a href='delete/<?php echo $_smarty_tpl->tpl_vars['glider']->value->id_parapente;?>
' type='button' class='btn btn-danger'>Borrar</a>
  </li>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul><?php }
}
