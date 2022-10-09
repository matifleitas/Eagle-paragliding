<?php
/* Smarty version 4.2.1, created on 2022-10-09 15:13:00
  from 'C:\xampp\htdocs\dashboard\Projects\TPE-especial\templates\home.Eagle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6342c8dc3a9e86_99156676',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8158a2e9a743922b5e1f905ffeae4e3a2bc1f02e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\Projects\\TPE-especial\\templates\\home.Eagle.tpl',
      1 => 1665321178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6342c8dc3a9e86_99156676 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

  <div class="carousel-inner">
      <div class="carousel-item active">
      <img src="https://cloudfront-us-east-1.images.arcpublishing.com/infobae/5NHMBBJOKZDRJBQX26CJDCULIU.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <p class="h3">"<?php echo $_smarty_tpl->tpl_vars['phraseHome']->value;?>
"</p>
        <p>Tienda de velas online de parapente</p>
      </div>
    </div>

    <div class="carousel-item">
        <img src="http://t1.gstatic.com/licensed-image?q=tbn:ANd9GcRKQ_RUFJRDrSUIb9vsJUvDL8E9YQtlMsqLjTUMD8F1RJDDnh6WaAYdXuPF9B6bBuCt_kA6cZtfqv1YCjZHAkU" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <p>Tienda de velas online de parapente</p>
      </div>
    </div>

    <div class="carousel-item">
        <img src="https://ojovolador.com/wp-content/uploads/2016/04/12952810_1019332918137263_1376242829_o.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <p>Tienda de velas online de parapente</p>
      </div>
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
