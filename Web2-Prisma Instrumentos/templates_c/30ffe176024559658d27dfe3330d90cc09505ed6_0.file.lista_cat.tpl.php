<?php
/* Smarty version 3.1.30, created on 2016-10-19 03:36:25
  from "C:\xampp\htdocs\web22\templates\lista_cat.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5806ce1944c570_83935622',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30ffe176024559658d27dfe3330d90cc09505ed6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web22\\templates\\lista_cat.tpl',
      1 => 1476816498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5806ce1944c570_83935622 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="">
  <table>
    <thead>
      <tr>
        <td class="columna">Nro</td>
        <td class="columna">Categoria</td>
        <td class="columna">Eliminar</td>


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
