
<div class="container">
    <div class="col-md-5 col-xs-5">
        <form class="comentar" method="POST">
          <div class="form-group ">
            <label for="exampleInputEmail1"><p>{$email[0]}, dejanos tu comentario</p></label>
            <input type="hidden" class="form-control" id="user" name="user" aria-describedby="emailHelp" value="{$email[0]}">
          </div>
          <div class="col-md-8 col-xs-8">
            <div class="form-group">
              <label for="exampleSelect1"><p>Instrumento</p></label>
              <select class="form-control" id="producto" name="producto">

              {foreach from=$productos item=$prod}
                {if $prod['stock']==0}
                  {if $prod['categoria']==$cat['categoria']}
               <option value='{$prod.modelo}'>{$prod.modelo}</option>
                    {/if}
                  {/if}
               {/foreach}
              </select>
            </div>
          </div>
          <div class="col-md-3 col-xs-3">
            <div class="form-group">
              <label for="exampleSelect1"><p>Calificacion</p></label>
              <select class="form-control" id="rate" name="rate">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
          </div>
          <div class="form-group "  class="col-md-5 col-xs-5">
            <label for="exampleTextarea"><p>Descripcion</p></label>
            <textarea class="form-control" rows="4" id="texto" name="texto"></textarea>
          </div>
          <input type="submit"  name="" class="btn btn-danger">
        </form>
    </div>
</div>
