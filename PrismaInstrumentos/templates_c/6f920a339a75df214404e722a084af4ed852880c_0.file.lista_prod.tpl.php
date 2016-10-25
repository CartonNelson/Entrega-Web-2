<?php
/* Smarty version 3.1.30, created on 2016-10-19 03:36:25
  from "C:\xampp\htdocs\web22\templates\lista_prod.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5806ce193d59b3_80006639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f920a339a75df214404e722a084af4ed852880c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web22\\templates\\lista_prod.tpl',
      1 => 1476819307,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5806ce193d59b3_80006639 (Smarty_Internal_Template $_smarty_tpl) {
?>

    <table>
      <table>
          <thead>
            <tr>
              <td class="columna">Nro</td>
              <td class="columna">Categoria</td>
              <td class="columna">Marca</td>
              <td class="columna">Modelo</td>
              <td class="columna">Precio(USD)</td>
              <td class="columna">Stock</td>
              <td class="columna">Eliminar</td>

            </tr>
          </thead>
          <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'prod');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['prod']->value) {
?>
                     <tr>
                      <td class="marca"><?php echo $_smarty_tpl->tpl_vars['prod']->value['id_producto'];?>
</td>
                      <td class="marca"><?php echo $_smarty_tpl->tpl_vars['prod']->value['categoria'];?>
</td>
                      <td class="marca"><?php echo $_smarty_tpl->tpl_vars['prod']->value['marca'];?>
</td>
                      <td class="modelo"><?php echo $_smarty_tpl->tpl_vars['prod']->value['modelo'];?>
</td>
                      <td class="precio"><?php echo $_smarty_tpl->tpl_vars['prod']->value['precio'];?>
</td>
                      <?php if ($_smarty_tpl->tpl_vars['prod']->value['stock'] == 0) {?>
                      <td class="marca"><a class="editarProducto" data-stock="<?php echo $_smarty_tpl->tpl_vars['prod']->value['id_producto'];?>
"href="#">si</td>
                      <?php } else { ?>
                      <td class="marca"><a class="editarProducto" data-stock="<?php echo $_smarty_tpl->tpl_vars['prod']->value['id_producto'];?>
"href="#">no</td>

                      <?php }?>
                      <td  class="precio"><a class="eliminarProducto" href="#" data-idProd="<?php echo $_smarty_tpl->tpl_vars['prod']->value['id_producto'];?>
">eliminar</td>


              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

          </tbody>
      </table>
<?php }
}
