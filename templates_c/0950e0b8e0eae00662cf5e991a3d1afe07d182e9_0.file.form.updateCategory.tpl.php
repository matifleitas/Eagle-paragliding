<?php
/* Smarty version 4.2.1, created on 2022-10-17 04:12:58
  from 'C:\xampp\htdocs\dashboard\Projects\TPE-especial\templates\form.updateCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634cba2a649920_52931922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0950e0b8e0eae00662cf5e991a3d1afe07d182e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\Projects\\TPE-especial\\templates\\form.updateCategory.tpl',
      1 => 1665959664,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634cba2a649920_52931922 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form action="updatedCategory/<?php echo $_smarty_tpl->tpl_vars['categoriesId']->value->id_category;?>
" method="POST" class="border border-success">
    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <label for="inputPassword6" class="col-form-label">Editar Categoria:</label>
        
            <input type="text" name="editCategory" class="form-control" >
            <button type="submit" class="btn btn-primary">Modificar</button>
            </div>
        </div>
    </div>
</form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
