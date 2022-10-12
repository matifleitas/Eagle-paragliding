<?php
/* Smarty version 4.2.1, created on 2022-10-12 20:56:55
  from 'C:\xampp\htdocs\dashboard\Projects\TPE-especial\templates\form.update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63470df7541a11_18771987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9dc8b44616c8af834b876dd92cc403ccda2487b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\Projects\\TPE-especial\\templates\\form.update.tpl',
      1 => 1665601010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63470df7541a11_18771987 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="updated/<?php echo $_smarty_tpl->tpl_vars['glider']->value->id_parapente;?>
" method="POST">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Id: </label>
    <input type="text" class="form-control" id="id" name="id" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre de la vela: </label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Categoria: </label>
    <input type="text" class="form-control" id="category" name="category">
  </div>

  <div class="mb-3">
    <label for="floatingInput" class="form-label">Descripcion: </label>
    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">URL imagen: </label>
    <input type="text" class="form-control" id="image" name="image" name="category">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Dificultad: </label>
    <input type="text" class="form-control" id="difficulty" name="difficulty" name="category">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Precio: </label>
    <input type="text" class="form-control" id="price" name="price" name="category">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Id_catgegory: </label>
    <input type="text" class="form-control" id="ID_fk" name="ID_fk" name="category">
  </div>

  <button type="submit" class="btn btn-primary">Modificar</button>
</form><?php }
}
