<!DOCTYPE html>



  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>ADMINSTRACION</h1>


  <div class="row">
    <container>
      <h3>Agregar Instrumento</h3>
        <form class="form-inline" id="formProducto" method="POST">
          <select class="form-control" name="categoria" title="categoria">
              {foreach $categorias item=$cat}
              <option value="{$cat.categoria}">{$cat.categoria}</option>
              {/foreach}
          </select>


          <input type="text" class="form-control"  name="marca" value="" placeholder="marca">
          <input type="text" class="form-control"  name="modelo" value="" placeholder="modelo">
          <input type="text" class="form-control"  name="precio" value="" placeholder="precio">

          <input type="submit" class=" btn btn-success"  name="Agregar" value="Agregar">

        </form>
      </div>
    </container>

  </div>
  <div class="row">
    <container>
      <h3>Agregar Categoria</h3>
      <form class="form-inline" id="formNewCat" method="POST" enctype="multipart/form-data">

        <input type="text" class="form-control" name="categoriaNueva" value="" placeholder="nueva categoria">


        <input type="file" class="form-control" name="img[]" value="" multiple>

        <input type="submit" class="btn btn-success" name="Agregar" value="Agregar">
      </form>
    </container>

      </div>
  <div class="row">
    <container>
      <h3>editar categoria</h3>
        <form class="form-inline" id="formEditarCategoria"  method="POST">

          <select class="form-control" name="id" title="categoria">
              {foreach $categorias item=$cat}
              <option value="{$cat.id_categoria}">{$cat.categoria}</option>
              {/foreach}
          </select>


            <input type="text" class="form-control" name="categoriaEdit" value="" placeholder="Nuevo nombre">
            <input type="submit" class=" btn btn-success" name="Editar" value="Editar">
        </form>



    </container>

  </div>
  <div class="row">
    <container>
      <h3>Editar Producto</h3>
        <form class="form-inline" id="formEditarProducto"  method="POST">

          <select class="form-control" name="id_prod" title="categoria">
              {foreach $productos item=$prod}
              <option value="{$prod.id_producto}">{$prod.modelo}</option>
              {/foreach}
          </select>


            <input type="text" class="form-control" name="marcaEdit" value="" placeholder="Editar marca">
            <input type="text" class="form-control" name="modeloEdit" value="" placeholder="Editar modelo">
            <input type="text" class="form-control" name="precioEdit" value="" placeholder="Editar precio">
            <select class="form-control" name="nameCategoria" title="categoria" >
                {foreach $categorias item=$cat}
                <option value="{$cat.categoria}">{$cat.categoria}</option>
                {/foreach}
            </select>

            <input type="submit" class=" btn btn-success" name="Editar" value="Editar">

        </form>
      </container>
    </div>

    <h1>LISTADO</h1>
    <h2>Productos</h2>
    <div class="">
      {include file='lista_prod.tpl'}

    </div>
    <h2>Categorias</h2>
    <div class="">
      {include file='lista_cat.tpl'}

    </div>
    {if $tipo==5}
    <h1>USUARIOS</h1>
    <div class="">
      {include file='usuarios.tpl'}
    </div>
    {/if }

    <h1>Comentarios</h1>
    <div class="col-md-6 col-xs-12"  id="coments">

    </div>

  </body>
