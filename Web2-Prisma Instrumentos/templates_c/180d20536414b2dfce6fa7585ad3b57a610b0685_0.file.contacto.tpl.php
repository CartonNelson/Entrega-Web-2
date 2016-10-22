<?php
/* Smarty version 3.1.30, created on 2016-10-22 05:44:36
  from "C:\xampp\htdocs\Entrega-Web-2\Web2-Prisma Instrumentos\templates\contacto.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580ae0a41d9728_27701537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '180d20536414b2dfce6fa7585ad3b57a610b0685' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Entrega-Web-2\\Web2-Prisma Instrumentos\\templates\\contacto.tpl',
      1 => 1477107269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_580ae0a41d9728_27701537 (Smarty_Internal_Template $_smarty_tpl) {
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
