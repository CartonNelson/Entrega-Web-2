<?php
require_once ("models/usuarios_model.php");
require_once ("views/usuarios_view.php");
require_once ("views/inst_view.php");


class login_controller
{
  private $model;
  private $vista;
  private $vista_inicial;
  function __construct()
  {
    $this->model= new usuarios_model;
    $this->vista= new usuarios_view;
    $this->vista_inicial= new inst_view;
  }


  public function registrarse(){
    if ((isset($_REQUEST['user']))&&(isset($_REQUEST['pass']))){
        if ((!empty($_REQUEST['user']))&&(!empty($_REQUEST['pass']))){
          $user = $_REQUEST['user'];
          $pass = $_REQUEST['pass'];
          $hash =password_hash($pass, PASSWORD_BCRYPT);
          $this->model->registrar($user,$hash);
          $this->vista_inicial->mostrarMensaje("Usted se ha registrado exitosamente, inicie sesion","success");


        }


    }


  }


  public function login(){
    if ((isset($_REQUEST['user']))&&(!empty($_REQUEST['user']))) {
      $user = $_REQUEST['user'];
      $pass = $_REQUEST['pass'];
      $hash = $this->model->getUser($user)["pass"];

          if(password_verify($pass, $hash))
          {
            session_start();
            $_SESSION['USER'] = $user;
            $tipo= $this->model->getUser($user)["permiso_adm"];
            $verif=true;

            $this->vista->iniciar_user($verif,$tipo);
            die();

          }else{
            $this->vista_inicial->mostrarMensaje("Usuario o contraseña incorrecto","danger");
          }
    }
      else
      {
            $this->vista_inicial->mostrarMensaje("Debe rellenar los campos","danger");
      }

  }


  //////////CHEKEAR EN EL CONSTRUCTOR DEL ADM_controller///
  public function checkLogin(){
   session_start();
   if(!isset($_SESSION['USER'])){
     header("Location: index.php");
     die();
   };
 }




  public function logout(){
    session_start();
   session_destroy();

    header("Location: index.php");

   die();
 }









}








 ?>
