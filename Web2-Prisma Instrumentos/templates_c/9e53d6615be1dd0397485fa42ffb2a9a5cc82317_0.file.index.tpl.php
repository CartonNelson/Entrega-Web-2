<?php
/* Smarty version 3.1.30, created on 2016-10-19 02:38:26
  from "C:\xampp\htdocs\web22\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5806c0827a91c2_50133778',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e53d6615be1dd0397485fa42ffb2a9a5cc82317' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web22\\templates\\index.tpl',
      1 => 1476234519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:contacto.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5806c0827a91c2_50133778 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
      <div class="publi">
        <img src="images/banner.jpg" alt="publicidad" class="col-md-2" />
      </div>
      <div id="llamada" class="col-md-8">
      </div>
      <div class="publi">
      <img src="images/banner.jpg" alt="publicidad" class="col-md-2" />
      </div>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:contacto.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
