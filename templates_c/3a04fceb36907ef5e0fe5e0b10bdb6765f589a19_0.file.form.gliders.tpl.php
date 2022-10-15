<?php
/* Smarty version 4.2.1, created on 2022-10-14 19:25:22
  from 'C:\xampp\htdocs\dashboard\Projects\TPE-especial\templates\form.gliders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63499b8232e814_52815343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a04fceb36907ef5e0fe5e0b10bdb6765f589a19' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\Projects\\TPE-especial\\templates\\form.gliders.tpl',
      1 => 1665768314,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63499b8232e814_52815343 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['email']->value) {?>
  <form action="add" method="POST">

    <div class="mb-2">
      <label for="floatingInput" class="form-label">Nombre: </label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Nombre de la vela">
    </div>

    <div class="mb-2">
      <label for="floatingInput" class="form-label">Categoria: </label>
          <select class="form-select" name="category" id="">
          <option selected disabled>Seleccionar la categoria de la nueva vela: </option>
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
        <input type="text" class="form-control" id="URL" name="URL" class="form-control" aria-describedby="basic-addon3">
      </div>

    <div class="mb-2">
      <label for="floatingInput" class="form-label">Dificultad: </label>
      <input type="text" class="form-control" id="difficulty" name="difficulty" placeholder="Dificultad de la vela">
    </div>

    <div class="mb-2">
      <label for="floatingInput" class="form-label">Precio: </label>
      <input type="number" class="form-control" id="price" name="price" placeholder="Precio de la vela">
    </div>

    <div class="mb-2">
      <label for="floatingInput" class="form-label">ID_fk: </label>
      <input type="text" class="form-control" id="ID_fk" name="ID_fk" placeholder="Precio de la vela">
  </div>

    <button type="submit" class="btn btn-info">Agregar</button>
    <br>
    <br>
  </form>
  
<?php }
}
}
