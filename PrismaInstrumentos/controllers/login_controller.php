<?php
require_once ("models/usuarios_model.php");
require_once ("views/usuarios_view.php");
require_once ("views/inst_view.php");


class login_controller
{
  private $model;
  private $vista;
  private $vista_inicial;
  private $tipoSesion;
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
          $this->vista_inicial->mostrarError("Usted se ha registrado exitosamente, inicie sesion","success");




        }else
        {
              $this->vista_inicial->mostrarError("Debe rellenar los campos","danger");
        }


    }


  }


  public function login(){
    if ((isset($_REQUEST['user']))&&(!empty($_REQUEST['user']))&&(isset($_REQUEST['pass']))&&(!empty($_REQUEST['pass']))) {
      $user = $_REQUEST['user'];
      $pass = $_REQUEST['pass'];
      $hash = $this->model->getUser($user)["pass"];

          if(password_verify($pass, $hash))
          {
            session_start();

            $_SESSION['USER'] = $user;
            header ("Location: index.php");
            $tipoSesion= $this->model->getUser($user)["permiso_adm"];
            $verif=true;
            $this->vista->iniciar_user($verif,$tipoSesion);
            
            die();

          }else{
            $this->vista_inicial->mostrarError("Usuario o contraseña incorrecto","danger");
          }

    }
      else
      {
            $this->vista_inicial->mostrarError("Debe rellenar los campos","danger");
      }


  }

  //////////DEVUELVO TIPO DE USUARIO///
  function getTipo (){

    if(isset($_SESSION['USER'])){
    //session_start();
    //
    $user=$_SESSION['USER'];

    return $tipoSesion= $this->model->getUser($user)["permiso_adm"];
      };

  }
  //////////DEVUELVO NOMBRE DE USUARIO LOGEADO///
  function getEmail (){
    session_start();
    $email=[];
    if(isset($_SESSION['USER'])){
      $user=$_SESSION['USER'];
      $nombre=$this->model->getUser($user);
      $email[]=$nombre["email"];
      return $email;
    };


  }



  public function checkLogin(){
   session_start();
   if(!isset($_SESSION['USER'])){
     header("Location: index.php");
     die();
   };
 }


//////////CERRAR SESION///
  public function logout(){
    session_start();
    session_destroy();
    header("Location: index.php");

   die();
 }







}








 ?>
