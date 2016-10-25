$(document).ready(function(){

  cargaHist();
  $("#llamadaHist").click(cargaHist);
  $("#llamadaInstGuitarra").click(cargaGuitarra);
  $("#llamadaLocal").click(cargaUbicacion);
  $("#llamadaAdmin").click(cargaAdmin);
  $("#contacto").submit(enviaConsulta);





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

function editarProducto(){
  event.preventDefault();

  $.get("index.php?action=editarProducto&id="+ $(this).attr("data-stock"), function(data) {
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
                function enviaConsulta(){
                    event.preventDefault();
                    formData = new FormData(this);
                    console.log("formData");
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

function cargaAdmin(){
  event.preventDefault();
  var cargas=$("#llamadaAdmin").attr('href');
  $.get("index.php?action=iniciar_ADM",function(data) {

     $('#llamada').html(data);
     $(".eliminarProducto").click(eliminarProducto);
     $(".eliminarCategoria").click(eliminarCategoria);
     $(".editarProducto").click(editarProducto);
     $("#formProducto").submit(agregarProducto);
     $("#formEditarCategoria").submit(editarCategoria);
     $("#formNewCat").submit(agregarCategoria);

   });
  render(cargas);
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
  });
  render(cargas);


  }




function  cargaHist(){
  event.preventDefault();
  var cargas= $("#llamadaHist").attr("href");
  render(cargas);
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
