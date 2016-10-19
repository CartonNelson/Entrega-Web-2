<?php
/* Smarty version 3.1.30, created on 2016-10-19 07:56:15
  from "C:\xampp\htdocs\posta\templates\lista_cat.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58070aff6fa619_27899528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc5e956d9d7a83e14a2dccd0963c40398388758b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\posta\\templates\\lista_cat.tpl',
      1 => 1476816498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58070aff6fa619_27899528 (Smarty_Internal_Template $_smarty_tpl) {
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
