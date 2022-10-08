<?php
/* Smarty version 4.2.1, created on 2022-10-08 13:07:55
  from 'C:\xampp\htdocs\dashboard\Projects\TPE-especial\templates\login.user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63415a0bd45bc6_94552960',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'daeed0b7fc24534df270ef0c1fa1c9a370084686' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\Projects\\TPE-especial\\templates\\login.user.tpl',
      1 => 1665227274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63415a0bd45bc6_94552960 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<form action="" method="POST">
<div class="mb-5"> 
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Ingresar Email">
</div>

<div class="mb-5">
    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Ingresar contraseña">
    
    <?php if ($_smarty_tpl->tpl_vars['error']->value) {?> 
        <div class="alert alert-danger mt-3">
            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

        </div>
    <?php }?>

    <span id="passwordHelpInline" class="form-label">Permitido entre 8 y 20 caracrteres.</span>
    <button type="submit" class="btn btn-primary">Enviar</button>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
