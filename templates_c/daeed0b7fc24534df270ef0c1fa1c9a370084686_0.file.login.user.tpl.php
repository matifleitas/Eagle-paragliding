<?php
/* Smarty version 4.2.1, created on 2022-10-14 04:49:04
  from 'C:\xampp\htdocs\dashboard\Projects\TPE-especial\templates\login.user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6348ce20797c66_83755511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'daeed0b7fc24534df270ef0c1fa1c9a370084686' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\Projects\\TPE-especial\\templates\\login.user.tpl',
      1 => 1665715730,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6348ce20797c66_83755511 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form action="verify" method="POST">
    <div class="mb-5"> 
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Ingresar Email">
    </div>

    <div class="mb-5">
        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Ingresar contraseña">

        <span id="passwordHelpInline" class="form-label">Permitido entre 8 y 20 caracrteres.</span>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
