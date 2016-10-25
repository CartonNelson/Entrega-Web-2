<?php
/* Smarty version 3.1.30, created on 2016-10-19 02:38:30
  from "C:\xampp\htdocs\web22\templates\instrumentos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5806c086879e69_48321672',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e3b1065fcd783a4f8f093d3ef03897fb064bc17' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web22\\templates\\instrumentos.tpl',
      1 => 1476820047,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5806c086879e69_48321672 (Smarty_Internal_Template $_smarty_tpl) {
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
                 <td class="columna">Precio(USD)</td>
                 <td class="columna">Stock</td>
               </tr>
             </thead>
             <tbody>
               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'prod');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['prod']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['prod']->value['categoria'] == $_smarty_tpl->tpl_vars['cat']->value['categoria']) {?>
                        <tr>
                         <td class="marca"><?php echo $_smarty_tpl->tpl_vars['prod']->value['marca'];?>
</td>
                         <td class="modelo"><?php echo $_smarty_tpl->tpl_vars['prod']->value['modelo'];?>
</td>
                         <td class="precio"><?php echo $_smarty_tpl->tpl_vars['prod']->value['precio'];?>
</td>
                         <?php if ($_smarty_tpl->tpl_vars['prod']->value['stock'] == 0) {?>
                         <td class="marca">si</td>
                         <?php } else { ?>
                         <td class="marca">no</td>
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
    <aside>
      <div class="col-md-6" class="col-xs-12">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cat']->value['imagenes'], 'imagen');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->value) {
?>
        <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['path'];?>
"    class="img-thumbnail">
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




<?php echo '<script'; ?>
 type="text/javascript" src="js/tabla.js">

<?php echo '</script'; ?>
>
<?php }
}
