<?php
/* Smarty version 3.1.30, created on 2016-10-25 04:37:37
  from "C:\xampp\htdocs\prisma\PrismaInstrumentos\templates\contacto.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580ec5714cd343_41839949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8b09467e35d896239acc19e60e5f475aa5c55d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prisma\\PrismaInstrumentos\\templates\\contacto.tpl',
      1 => 1477107269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_580ec5714cd343_41839949 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
  <div id="contact">
    <form id="contacto" class="col-xs-4 col-md-offset-4" method="POST">
      <h2>Contactanos</h2>
        <div>
          <button class="face"></button>
          <button class="twit" ></button>
          <button class="inst" ></button>
        </div>
        <div class="contacto">
          <div >
            <h2>Nombre</h2>
              <input name="nombre" class="form-control" type="text" value="" size="30" />
          </div>
          <div>
            <h2>E-mail</h2>
              <input name="email" class="form-control" type="text" value="" size="30" />
          </div>
          <div>
            <h2>Mensaje</h2>
              <textarea name="mensaje" rows="7" cols="50"></textarea>
          </div>
            <input type="submit" class="btn btn-danger"value="Enviar Consulta" />
        </div>
    </form>
  </div>
</div>
<?php }
}
