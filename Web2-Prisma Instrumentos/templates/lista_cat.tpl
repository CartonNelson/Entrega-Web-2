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
      {foreach from=$categorias item=$cat}
        <tr>

          <td class="marca">{$cat.id_categoria}</td>
          <td class="marca">{$cat.categoria}</td>
          <td class="marca"><a class="eliminarCategoria" data-idCat="{$cat['id_categoria']}" href="#">eliminar</a></td>
          <td class="marca">
            <div class="col-md-2" class="col-xs-2">
                {foreach $cat['imagenes'] item=imagen}
                <img src="{$imagen['path']}"    class="img-thumbnail">
                {/foreach}
              </div>
          </td>
        </tr>


    {/foreach}
    </tfoot>
  </table>



</div>
