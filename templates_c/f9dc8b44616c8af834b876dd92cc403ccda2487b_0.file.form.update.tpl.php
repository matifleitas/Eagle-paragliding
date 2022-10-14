<?php
/* Smarty version 4.2.1, created on 2022-10-13 16:57:00
  from 'C:\xampp\htdocs\dashboard\Projects\TPE-especial\templates\form.update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6348273c533435_63565853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9dc8b44616c8af834b876dd92cc403ccda2487b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\Projects\\TPE-especial\\templates\\form.update.tpl',
      1 => 1665673014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6348273c533435_63565853 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="updated/<?php echo $_smarty_tpl->tpl_vars['glider']->value->id_parapente;?>
" method="POST">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre de la vela: </label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
  </div>

  <div class="mb-2">
    <label for="floatingInput" class="form-label">Categoria: </label>
        <select class="form-select" name="category" id="">
        <option selected disabled>Seleccionar la categoria a modificar: </option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value->type_paraglider;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value->type_paraglider;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
  </div>

  <div class="mb-3">
    <label for="floatingInput" class="form-label">Descripcion: </label>
    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
  </div>

  <label for="basic-url" class="form-label">URL de imagen del parapente</label>
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
    <input type="text" class="form-control" id="image" name="image" aria-describedby="basic-addon3">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Dificultad: </label>
    <input type="text" class="form-control" id="difficulty" name="difficulty" name="category">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Precio: </label>
    <input type="number" class="form-control" id="price" name="price" name="category">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Id_catgegory: </label>
    <input type="text" class="form-control" id="ID_fk" name="ID_fk" name="category">
  </div>

  <button type="submit" class="btn btn-primary">Modificar</button>
</form><?php }
}
