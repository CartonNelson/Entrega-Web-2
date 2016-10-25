<?php
/* Smarty version 3.1.30, created on 2016-10-19 05:12:27
  from "C:\xampp\htdocs\web22\templates\contacto.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5806e49b2b2209_38304844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4d718f4ccd9643399ad60f5a982f22191e7df3a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web22\\templates\\contacto.tpl',
      1 => 1476846742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5806e49b2b2209_38304844 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
  <div id="contact">
    <form id="contacto" action="index.php?action=enviarContacto" class="col-xs-4 col-md-offset-4" method="post">
      <h2>Contactanos</h2>
        <div>
          <button class="face"></button>
          <button class="twit" ></button>
          <button class="inst" ></button>
        </div>
        <div class="contacto">
          <div >
            <h2>Nombre</h2>
              <input name="nombre" type="text" value="" size="30" />
          </div>
          <div>
            <h2>E-mail</h2>
              <input name="email" type="text" value="" size="30" />
          </div>
          <div>
            <h2>Mensaje</h2>
              <textarea name="mensaje" rows="7" cols="50"></textarea>
          </div>
            <input type="submit" value="Enviar email" />
        </div>
    </form>
  </div>
</div>
<?php }
}
