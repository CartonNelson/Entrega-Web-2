<article>
  <section>
    <ul class="lista" >
          {foreach from=$categorias item=$cat}
          <li ><a href="#{$cat.categoria}"  class="lista">{$cat.categoria}</a></li>
          {/foreach}

    </ul>
  </section>
</article>
{foreach from=$categorias item=$cat}
<div class="row">
   <div  class="col-md-6 col-xs-12">
     <article>
       <section>
         <h1 class="titlista"id="{$cat.categoria}">{$cat.categoria}</h1>
         <table>
             <thead>
               <tr>
                 <td class="columna">Marca</td>
                 <td class="columna">Modelo</td>
                 <td class="columna">Precio</td>
               </tr>
             </thead>
             <tbody>
               {foreach from=$productos item=$prod}
                  {if $prod['stock']==0}
                      {if $prod['categoria']==$cat['categoria']}
                        <tr>
                         <td class="marca">{$prod.marca}</td>
                         <td class="modelo">{$prod.modelo}</td>
                         <td class="precio">{$prod.precio}</td>
                       </tr>
                      {/if}

                    {/if}
                 {/foreach}
             </tbody>
         </table>
       </section>
   </div>
   <aside class="publi">
      <div class="col-md-6" class="col-xs-4" >
          <h2>Galeria de imagenes</h2>
              {foreach $cat['imagenes'] item=imagen}
                <div class=>
                 <a href="{$imagen['path']}" class="thumbnail">
                   <img src="{$imagen['path']}" alt="" style="">
                 </a>
               </div>

              {/foreach}

        </div>
      </aside>
</article>
</div>
{/foreach}



<script type="text/javascript" src="js/tabla.js">

</script>
