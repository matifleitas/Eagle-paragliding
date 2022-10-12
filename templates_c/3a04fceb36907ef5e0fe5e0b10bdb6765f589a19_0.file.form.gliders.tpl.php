<?php
/* Smarty version 4.2.1, created on 2022-10-12 14:38:34
  from 'C:\xampp\htdocs\dashboard\Projects\TPE-especial\templates\form.gliders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6346b54a939fe9_27552158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a04fceb36907ef5e0fe5e0b10bdb6765f589a19' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\Projects\\TPE-especial\\templates\\form.gliders.tpl',
      1 => 1665578242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6346b54a939fe9_27552158 (Smarty_Internal_Template $_smarty_tpl) {
?>  
<form action="add" method="POST">
  <div class="mb-2">
    <label for="floatingInput" class="form-label">id: </label>
    <input type="text" class="form-control" id="id" name="id" placeholder="Id de la vela">
  </div>

  <div class="mb-2">
    <label for="floatingInput" class="form-label">Nombre: </label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre de la vela">
  </div>

  <div class="mb-2">
    <label for="floatingInput" class="form-label">Categoria: </label>
    <input type="text" class="form-control" id="category" name="category" placeholder="Categoria de la vela">
  </div>

  <div class="mb-3">
    <label for="floatingInput" class="form-label">Descripcion: </label>
    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
  </div>

    <label for="basic-url" class="form-label">URL de imagen del parapente</label>
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
      <input type="text" class="form-control" id="URL" name="URL" aria-describedby="basic-addon3">
    </div>

  <div class="mb-2">
    <label for="floatingInput" class="form-label">Dificultad: </label>
    <input type="text" class="form-control" id="difficulty" name="difficulty" placeholder="Dificultad de la vela">
  </div>

  <div class="mb-2">
    <label for="floatingInput" class="form-label">Precio: </label>
    <input type="text" class="form-control" id="price" name="price" placeholder="Precio de la vela">
  </div>

  <div class="mb-2">
    <label for="floatingInput" class="form-label">ID_fk: </label>
    <input type="text" class="form-control" id="ID_fk" name="ID_fk" placeholder="Precio de la vela">
</div>

  <button type="submit" class="btn btn-info">Agregar</button>
</form>

<?php }
}
