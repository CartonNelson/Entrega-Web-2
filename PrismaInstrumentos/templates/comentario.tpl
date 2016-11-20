<div class="col-md-12 col-xs-12">
<form>
  <div class="form-group ">
    <label for="exampleInputEmail1"><p>{$email[0]}, dejanos tu comentario</p></label>
    <input type="hidden" class="form-control" id="" name="user" aria-describedby="emailHelp" value="{$email[0]}">
  </div>
  <div class="form-group">
    <label for="exampleSelect1"><p>Instrumento</p></label>
    <select class="form-control" id="exampleSelect1" name="producto">

    {foreach from=$productos item=$prod}
      {if $prod['stock']==0}
        {if $prod['categoria']==$cat['categoria']}
     <option value='{$prod.modelo}'>{$prod.modelo}</option>
          {/if}
        {/if}
     {/foreach}
    </select>
  </div>
  <div class="form-group">
    <label for="exampleSelect1"><p>Calificacion</p></label>
    <select class="form-control" id="exampleSelect1" name="rate">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>

    </select>
  </div>
  <div class="form-group ">
    <label for="exampleTextarea"><p>Descripcion</p></label>
    <textarea class="form-control" id="exampleTextarea" rows="3" name="texto"></textarea>
  </div>



  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>
