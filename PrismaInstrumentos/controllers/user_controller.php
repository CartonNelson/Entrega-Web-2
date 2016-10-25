<?php
require_once ("views/inst_view.php");
require_once ("views/ADM_view.php");
require_once ("models/instrumentos_model.php");
require_once ("models/contactoModel.php");



class user_controller{
  private $vista;
  private $model;
  private $contactoModel;

  function __construct()
  {
    $this->vista= new inst_view();
    $this->model= new instrumentos_model();
    $this->contactoModel= new contactoModel();
  }

  function iniciar(){
      $this->vista->iniciar();

  }
  function mostrarInst(){
    $productos= $this->model->getProductos();
    $categorias= $this->model->getCategorias();
    $this->vista->mostrarInst($productos,$categorias);
  }
  function mostrarProductos(){
    $productos= $this->model->getProductos();

    $this->vista->mostrarProductos($productos);

  }
  function mostrarCategorias(){
    $categorias= $this->model->getCategorias();
    $this->vista-> mostrarCat($categorias);


  }
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
