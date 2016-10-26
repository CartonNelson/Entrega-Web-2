
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
            {foreach from=$productos item=$prod}
                     <tr>
                      <td class="marca">{$prod.id_producto}</td>
                      <td class="marca">{$prod.categoria}</td>
                      <td class="marca">{$prod.marca}</td>
                      <td class="modelo">{$prod.modelo}</td>
                      <td class="precio">{$prod.precio}</td>
                      {if $prod['stock']==0}
                      <td class="marca"><a class="editarStock" data-stock="{$prod['id_producto']}"href="#">si</td>
                      {else}
                      <td class="marca"><a class="editarStock" data-stock="{$prod['id_producto']}"href="#">no</td>

                      {/if}
                      <td  class="precio"><a class="eliminarProducto" href="#" data-idProd="{$prod['id_producto']}">eliminar</td>


              {/foreach}
          </tbody>
      </table>
