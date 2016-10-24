<?php
<<<<<<< HEAD
/* Smarty version 3.1.30, created on 2016-10-24 03:34:23
=======
/* Smarty version 3.1.30, created on 2016-10-24 01:48:36
>>>>>>> divicionMVC
  from "C:\xampp\htdocs\prisma\Web2-Prisma Instrumentos\templates\lista_prod.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
<<<<<<< HEAD
  'unifunc' => 'content_580d651fc8a4f9_74794449',
=======
  'unifunc' => 'content_580d4c54361703_91117755',
>>>>>>> divicionMVC
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c977b28c01c190d294e903a2929621de9a64de3b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prisma\\Web2-Prisma Instrumentos\\templates\\lista_prod.tpl',
      1 => 1477107269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_580d651fc8a4f9_74794449 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_580d4c54361703_91117755 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> divicionMVC
?>

    <table>
      <table>
          <thead>
            <tr>
              <td class="columna">Nro</td>
              <td class="columna">Categoria</td>
              <td class="columna">Marca</td>
              <td class="columna">Modelo</td>
              <td class="columna">Precio</td>
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
