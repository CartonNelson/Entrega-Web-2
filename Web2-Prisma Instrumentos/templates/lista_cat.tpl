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
      {foreach from=$categorias item=$cat}
        <tr>

          <td class="marca">{$cat.id_categoria}</td>
          <td class="marca">{$cat.categoria}</td>
          <td class="marca"><a class="eliminarCategoria" data-idCat="{$cat['id_categoria']}" href="#">eliminar</a></td>

        </tr>


    {/foreach}
    </tfoot>
  </table>



</div>
