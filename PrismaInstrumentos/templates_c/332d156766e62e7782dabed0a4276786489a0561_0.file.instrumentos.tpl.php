<?php
/* Smarty version 3.1.30, created on 2016-11-18 16:24:56
  from "C:\xampp\htdocs\prisma\PrismaInstrumentos\templates\instrumentos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_582f1d48d88944_53819715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '332d156766e62e7782dabed0a4276786489a0561' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prisma\\PrismaInstrumentos\\templates\\instrumentos.tpl',
      1 => 1479482686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_582f1d48d88944_53819715 (Smarty_Internal_Template $_smarty_tpl) {
?>
<article>
  <section>
    <ul class="lista" >
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
?>
          <li ><a href="#<?php echo $_smarty_tpl->tpl_vars['cat']->value['categoria'];?>
"  class="lista"><?php echo $_smarty_tpl->tpl_vars['cat']->value['categoria'];?>
</a></li>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    </ul>
  </section>

</article>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
?>
<div class="row">
   <div  class="col-md-6 col-xs-12">
     <article>
       <section>
         <h1 class="titlista"id="<?php echo $_smarty_tpl->tpl_vars['cat']->value['categoria'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['categoria'];?>
</h1>
         <table>
             <thead>
               <tr>
                 <td class="columna">Marca</td>
                 <td class="columna">Modelo</td>
                 <td class="columna">Precio</td>
               </tr>
             </thead>
             <tbody>
               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'prod');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['prod']->value) {
?>
                  <?php if ($_smarty_tpl->tpl_vars['prod']->value['stock'] == 0) {?>
                      <?php if ($_smarty_tpl->tpl_vars['prod']->value['categoria'] == $_smarty_tpl->tpl_vars['cat']->value['categoria']) {?>
                        <tr>
                         <td class="marca"><?php echo $_smarty_tpl->tpl_vars['prod']->value['marca'];?>
</td>
                         <td class="modelo"><?php echo $_smarty_tpl->tpl_vars['prod']->value['modelo'];?>
</td>
                         <td class="precio"><?php echo $_smarty_tpl->tpl_vars['prod']->value['precio'];?>
</td>
                       </tr>
                      <?php }?>

                    <?php }?>
                 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

             </tbody>
         </table>
       </section>
   </div>
   <aside class="publi">
      <div class="col-md-6" class="col-xs-4" >
          <h2>Galeria de imagenes</h2>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cat']->value['imagenes'], 'imagen');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->value) {
?>
                <div class=>
                 <a href="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['path'];?>
" class="thumbnail">
                   <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['path'];?>
" alt="" style="">
                 </a>
               </div>

              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


        </div>
      </aside>
</article>
</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


<button id="mostrarComentarios" type="button" class="btn btn-default btn-xs pull-right" >comentarios</button>
<div id="coments">

</div>

<?php echo '<script'; ?>
 type="text/javascript" src="js/tabla.js">

<?php echo '</script'; ?>
>
<?php }
}
