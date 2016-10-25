<?php
/* Smarty version 3.1.30, created on 2016-10-25 04:37:37
  from "C:\xampp\htdocs\prisma\PrismaInstrumentos\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580ec5713d0b02_89863408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efd2e378bf85871a1e5a5c79db69fe41bdd5c44a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prisma\\PrismaInstrumentos\\templates\\index.tpl',
      1 => 1477107269,
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
function content_580ec5713d0b02_89863408 (Smarty_Internal_Template $_smarty_tpl) {
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
