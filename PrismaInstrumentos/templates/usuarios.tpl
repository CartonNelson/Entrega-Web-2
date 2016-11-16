
    <table>
      <table>
          <thead>
            <tr>
              <td class="columna">ID Usuario</td>
              <td class="columna">Email</td>
              <td class="columna">Estado</td>

            </tr>
          </thead>
          <tbody>
            {foreach from=$usuarios item=$user}
                     <tr>
                      <td class="marca">{$user.id_usuario}</td>
                      <td class="marca">{$user.email}</td>

                      {if $user['permiso_adm']==0}
                      <td class="marca"><a class="darPermiso" data-user="{$user['id_usuario']}" href="#">Regular</td>
                      {else}
                      <td class="marca"><a class="darPermiso" data-user="{$user['id_usuario']}" href="#">Administrador</td>

                      {/if}

              {/foreach}
          </tbody>
      </table>
