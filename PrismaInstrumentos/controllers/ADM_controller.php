<?php
require_once ("views/inst_view.php");
require_once ("views/ADM_view.php");
require_once ("models/instrumentos_model.php");
require_once ("models/contactoModel.php");
require_once ("models/categoria_model.php");

class ADM_controller
{
  private $vista;
  private $prodModel;
  private $contactoModel;
  private $catModel;
  function __construct()
  {
    $this->vista= new ADM_view();
    $this->prodModel= new instrumentos_model();
    $this->catModel= new categoria_model();
    $this->contactoModel= new contactoModel();
  }

  function iniciar_ADM(){
    $productos= $this->prodModel->getProductos();
    $categorias= $this->catModel->getCategorias();
    $this->vista->iniciar_ADM($productos,$categorias);

  }
    function mostrarInst(){
      $productos= $this->prodModel->getProductos();
      $categorias= $this->catModel->getCategorias();
      $this->vista->mostrarInst($productos,$categorias);
    }


///////////////////////////////PRODUCTOS//////////////////////////////////////
  function agregarProducto(){
    if((isset($_POST['categoria']))&&(isset($_POST['marca']))&&(isset($_POST['modelo']))&&(isset($_POST['precio']))){
        if ((!empty($_POST['categoria']))&&(!empty($_POST['marca']))&&(!empty($_POST['modelo']))&&(!empty($_POST['precio']))) {
          $categoria= $_POST['categoria'];
          $marca= $_POST['marca'];
          $modelo= $_POST['modelo'];
          $precio= $_POST['precio'];
          $instrumento= array('categoria'=>$categoria,'marca'=>$marca ,'modelo'=>$modelo,'precio'=>$precio);
          $this->prodModel->agregarProducto($instrumento);
        }

    }


  }

    function mostrarProductos(){
      $productos= $this->prodModel->getProductos();

      $this->vista->mostrarProductos($productos);

    }

    function eliminarProducto(){
      if(isset($_REQUEST['id'])){
        if(!empty($_REQUEST['id'])){
          $id = array('id' => $_REQUEST['id']);
          $this->prodModel->eliminarProducto($id);

        }

      }
    }

    function editarStock(){
        if (isset($_REQUEST['id'])){
          $edit = $_REQUEST['id'];
          $this->prodModel->editarStock($edit);
        }

    }
   function editarProducto(){
     if ((isset($_POST['marcaEdit']))&&(isset($_POST['modeloEdit']))&&(isset($_POST['precioEdit']))&&(isset($_POST['nameCategoria']))&&(isset($_POST['id_prod']))){
        $marca = $_POST['marcaEdit'];
        $modelo = $_POST['modeloEdit'];
        $precio = $_POST['precioEdit'];
        $categoria = $_POST['nameCategoria'];
        $id_producto= $_POST['id_prod'];

        $this->prodModel->editarProducto($marca,$modelo,$precio,$categoria,$id_producto);


     }
   }
////////////////////////CATEGORIAS//////////////////////////////////////
      function getImagenesVerificadas($imagenes){
      $imagenesVerificadas = [];
      for ($i=0; $i < count($imagenes['size']); $i++) {
        if($imagenes['size'][$i]>0 && $imagenes['type'][$i]=="image/jpeg"){
            $imagen_aux = [];
            $imagen_aux['tmp_name']=$imagenes['tmp_name'][$i];
            $imagen_aux['name']=$imagenes['name'][$i];
            $imagenesVerificadas[]=$imagen_aux;
        }
      }

      return $imagenesVerificadas;
      }

    function agregaCat(){
        if ((isset($_POST['categoriaNueva']))&&(isset($_FILES['img']))){
          if ((!empty($_POST['categoriaNueva']))&&(!empty($_FILES['img']))){

            $categoria= $_POST['categoriaNueva'];
            $imagenesVerificadas = $this->getImagenesVerificadas($_FILES['img']);

                if(count($imagenesVerificadas)>0){
                  $cat= array('categoria'=>$categoria);
                  $this->catModel->agregaCat($cat,$imagenesVerificadas);
                  }


          }

        }
    }
    function mostrarCategorias(){
      $categorias= $this->catModel->getCategorias();
      $this->vista-> mostrarCat($categorias);


    }

    function eliminarCategoria(){
      if (isset($_REQUEST['id'])){
        if(!empty($_REQUEST['id'])){
          $id = array('id' => $_REQUEST['id']);
          $this->catModel->eliminarCategoria($id);

        }
      }
    }

    function editarCategoria(){
      if ((isset($_REQUEST['categoriaEdit']))&&(isset($_REQUEST['id']))){
        if((!empty($_REQUEST['categoriaEdit']))&&(!empty($_REQUEST['id']))){
          $edit = array('id' => $_REQUEST['id'],'categoria' => $_REQUEST['categoriaEdit']);
          $this->catModel->editarCategoria($edit);

        }
      }
    }

    /////////////////////////////////CONTACTO////////////////////////////////
      function enviarContacto(){
        if((isset($_POST['nombre']))&&(isset($_POST['email']))&&(isset($_POST['mensaje']))){
          if((!empty($_POST['nombre']))&&(!empty($_POST['email']))&&(!empty($_POST['mensaje']))){
            $consulta = array('nombre' =>$_POST['nombre'] ,'email' =>$_POST['email'],'mensaje' =>$_POST['mensaje']);
            $this->contactoModel->enviarContacto($consulta);

            }
        }
      }

}








 ?>
