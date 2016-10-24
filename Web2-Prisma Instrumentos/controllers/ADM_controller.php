<?php
require_once ("views/inst_view.php");
require_once ("views/ADM_view.php");
require_once ("models/instrumentos_model.php");
require_once ("models/contactoModel.php");

class ADM_controller
{
  private $vista;
  private $model;
  private $contactoModel;
  function __construct()
  {
    $this->vista= new ADM_view();
    $this->model= new instrumentos_model();
    $this->contactoModel= new contactoModel();
  }

  function iniciar_ADM(){
    $productos= $this->model->getProductos();
    $categorias= $this->model->getCategorias();
    $this->vista->iniciar_ADM($productos,$categorias);

  }
    function mostrarInst(){
      $productos= $this->model->getProductos();
      $categorias= $this->model->getCategorias();
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
          $this->model->agregarProducto($instrumento);
        }

    }


  }

    function mostrarProductos(){
      $productos= $this->model->getProductos();

      $this->vista->mostrarProductos($productos);

    }

    function eliminarProducto(){
      if(isset($_REQUEST['id'])){
        if(!empty($_REQUEST['id'])){
          $id = array('id' => $_REQUEST['id']);
          $this->model->eliminarProducto($id);

        }

      }
    }

    function editarProducto(){
        if (isset($_REQUEST['id'])){
          $edit = $_REQUEST['id'];
          $this->model->editarProducto($edit);
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
                  $this->model->agregaCat($cat,$imagenesVerificadas);
                  }


          }

        }
    }
    function mostrarCategorias(){
      $categorias= $this->model->getCategorias();
      $this->vista-> mostrarCat($categorias);


    }

    function eliminarCategoria(){
      if (isset($_REQUEST['id'])){
        if(!empty($_REQUEST['id'])){
          $id = array('id' => $_REQUEST['id']);
          $this->model->eliminarCategoria($id);

        }
      }
    }

    function editarCategoria(){
      if ((isset($_REQUEST['categoriaEdit']))&&(isset($_REQUEST['id']))){
        if((!empty($_REQUEST['categoriaEdit']))&&(!empty($_REQUEST['id']))){
          $edit = array('id' => $_REQUEST['id'],'categoria' => $_REQUEST['categoriaEdit']);
          $this->model->editarCategoria($edit);

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
