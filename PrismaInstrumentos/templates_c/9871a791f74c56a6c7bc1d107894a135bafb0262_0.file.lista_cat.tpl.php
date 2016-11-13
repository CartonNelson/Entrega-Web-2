<?php
/* Smarty version 3.1.30, created on 2016-11-12 04:47:30
  from "C:\xampp\htdocs\prisma\PrismaInstrumentos\templates\lista_cat.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_582690d2195ea1_11520153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9871a791f74c56a6c7bc1d107894a135bafb0262' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prisma\\PrismaInstrumentos\\templates\\lista_cat.tpl',
      1 => 1478920877,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_582690d2195ea1_11520153 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="">
  <table>
    <thead>
      <tr>
        <td class="columna">Nro</td>
        <td class="columna">Categoria</td>
        <td class="columna">Eliminar</td>
        <td class="columna">Imagen</td>

      </tr>
    </thead>
    <tfoot>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
?>
        <tr>

          <td class="marca"><?php echo $_smarty_tpl->tpl_vars['cat']->value['id_categoria'];?>
</td>
          <td class="marca"><?php echo $_smarty_tpl->tpl_vars['cat']->value['categoria'];?>
</td>
          <td class="marca"><a class="eliminarCategoria" data-idCat="<?php echo $_smarty_tpl->tpl_vars['cat']->value['id_categoria'];?>
" href="#">eliminar</a></td>
          <td class="marca">
            <div class="col-md-2" class="col-xs-2">
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
          </td>
        </tr>


    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </tfoot>
  </table>



</div>
<?php }
}
