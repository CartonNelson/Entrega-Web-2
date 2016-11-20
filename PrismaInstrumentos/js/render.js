$(document).ready(function(){

  cargaHist();
  $("#llamadaHist").click(cargaHist);
  $("#llamadaInstGuitarra").click(cargaGuitarra);
  $("#llamadaLocal").click(cargaUbicacion);
  $("#llamadaAdmin").click(cargaAdmin);

function cargaAdmin(){
  event.preventDefault();
  var cargas=$("#llamadaAdmin").attr('href');

  $.get("index.php?action=iniciar_ADM",function(data) {

  $('#llamada').html(data);
  $(".eliminarProducto").click(eliminarProducto);
  $(".eliminarCategoria").click(eliminarCategoria);
  $(".editarStock").click(editarStock);
  $("#formProducto").submit(agregarProducto);
  $("#formEditarCategoria").submit(editarCategoria);
  $("#formNewCat").submit(agregarCategoria);
  $("#formEditarProducto").submit(editarProducto);
  $(".darPermiso").click(darPermiso);
  $(document).on("click", ".borrar", function(){
  borrarComentario($(this).attr("data-id_coment"));
  $("#comentsAdm").html(data);
  cargaAdmin();
  });


  $(document).ready(function(){
    var refreshId = setInterval(getComentsAdm, 2000);
    $.ajaxSetup({ cache: false });
  });
   event.preventDefault();

  });
  render(cargas);
}

function eliminarProducto(){
  event.preventDefault();

  $.get("index.php?action=eliminarProducto&id="+ $(this).attr("data-idProd"), function(data) {
  $('#llamada').html(data);


  cargaAdmin();

  });

}


function eliminarCategoria(){
  event.preventDefault();

  $.get("index.php?action=eliminarCategoria&id="+ $(this).attr("data-idCat"), function(data) {
  $('#llamada').html(data);

  cargaAdmin();

  });

}


function darPermiso(){
  event.preventDefault();

  $.get("index.php?action=darPermiso&id="+ $(this).attr("data-user"), function(data) {
  $('#llamada').html(data);

  cargaAdmin();

  });

}

function editarStock(){
  event.preventDefault();

  $.get("index.php?action=editarStock&id="+ $(this).attr("data-stock"), function(data) {
  $('#llamada').html(data);

  cargaAdmin();

  });

}


function agregarProducto(){
      event.preventDefault();
      formData = new FormData(this);
      $.ajax({
        method: "POST",
        url: "index.php?action=agregarProducto",
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        success: function(data){
          $("#llamada").html(data);
          cargaAdmin();
        }
      });
    }


function editarCategoria(){
    event.preventDefault();
    formData = new FormData(this);
      $.ajax({
      method: "POST",
      url:"index.php?action=editarCategoria",
      data: formData,
      contentType: false,
      cache: false,
      processData: false,
      success: function(data){
      $("#llamada").html(data);
      cargaAdmin();
      }
      });
    }
////////////////////////////////////////////////////////
 function agregarCategoria(){
   event.preventDefault();
  formData = new FormData(this);
  $.ajax({
    method: "POST",
    url: "index.php?action=agregaCat",
    data: formData,
    contentType: false,
    cache: false,
    processData: false,
    success: function(data){
    $("#llamada").html(data);
    cargaAdmin();
    }
    });
  }
//////////////////////////////////////////////////
function editarProducto(){
    event.preventDefault();
    formData = new FormData(this);
    $.ajax({
      method: "POST",
      url: "index.php?action=editarProducto",
      data: formData,
      contentType: false,
      cache: false,
      processData: false,
      success: function(data){
      $("#llamada").html(data);
      cargaAdmin();
      }
    });
  }
//////////////////////////////////////////////////
function enviaConsulta(){
    event.preventDefault();
    formData = new FormData(this);
    $.ajax({
      method: "POST",
      url: "index.php?action=enviarContacto",
      data: formData,
      contentType: false,
      cache: false,
      processData: false,
      context:this,
      success: function(data){
      $("#llamada").html(data);
        cargaHist()
        this.reset();
      }
    });
}







  function  cargaUbicacion(){
  event.preventDefault();
  var cargas=$("#llamadaLocal").attr('href');
  render(cargas);


  }

  function cargaGuitarra (){
    event.preventDefault();
    var cargas=$("#llamadaInstGuitarra").attr('href');
    $.post( "index.php?action=mostrarInst",function(data) {
    $('#llamada').html(data);
     $(document).on("submit", ".comentar", function(){
       comentar();

     });

    $(document).ready(function(){
    var refreshId = setInterval(getComentsUser, 2000);
    $.ajaxSetup({ cache: false });
    });

     event.preventDefault();
   });
  render(cargas);


  }




function  cargaHist(){
  event.preventDefault();
  var cargas= $("#llamadaHist").attr("href");

  render(cargas);


}
///////////////////////mostrar comentarios general///////////////////
function getComentsUser(){
$.ajax({
    method:"GET",
    dataType: "JSON",
    url: "api/coment",
    success: createCommentUser
  });

}

var templateUser;
$.ajax({ url: 'js/templates/comentarios.mst',
 success: function(templateReceived) {
   templateUser = templateReceived;
 }
});
function createCommentUser(coments){
    console.log(coments);
     var rendered = Mustache.render(templateUser,{paquete:coments});
     $('#coments').html(rendered);

}
////////////////////////////////////////////////////////////////////////

///////////////////////mostrar comentarios admin///////////////////
function getComentsAdm(){
$.ajax({
    method:"GET",
    dataType: "JSON",
    url: "api/coment",
    success: createCommentAdm
  });

}

var templateAdm;
$.ajax({ url: 'js/templates/comentarios_adm.mst',
 success: function(templateReceived) {
   templateAdm= templateReceived;
 }
});
function createCommentAdm(coments){
    console.log(coments);
     var rendered = Mustache.render(templateAdm,{paquete:coments});
     $('#comentsAdm').html(rendered);

}
////////////////////////////////////////////////////////////////////////

///////////////////////eliminar comentarios///////////////////

function borrarComentario(id_comentario){
  $.ajax({
    method:"DELETE",
    url:"api/coment/"+id_comentario,
    success: function(data){
      $("#llamada").html(data);
      cargaAdmin();
    }

});
}

function comentar(){

      event.preventDefault();
      formData = new FormData(this);
      console.log(formData);
      $.ajax({
        method: "POST",
        url: "api/coment/",
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        success: function(data){
          // $("#llamada").html(data);
          // cargaGuitarra();
        }
      });
    }

function render(dir, fnsc){
  $.ajax({
    url:dir+'?',
    method:"GET",
    dataType:"html",
    success: function(data){
      $('#llamada').html(data);
      if(fnsc){
        fnsc();
      }

  },
  error: function(){
    alert("Error de carga asincronica");
  }
});
}
});
