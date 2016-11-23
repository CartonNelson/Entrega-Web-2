<?php
require 'api.php';
include_once(dirname(__DIR__)."/controllers/login_controller.php");
require '../models/comentarios_model.php';
include_once '../sql/config.php';


class comentarios_API extends api
{
  private $model;
  private $login_controller;

  public function __construct($request)
 {
    parent::__construct($request);
    $this->model = new comentarios_model();
    $this->login_controller = new login_controller();
  }
  protected function coment($argumentos){
    switch ($this->method) {
      case 'GET':
          if(count($argumentos)>0){
            $comentario = $this->model->getComentario($argumentos[0]);
            $error['Error'] = "El comentario no existe";
            return ($comentario) ? $comentario : $error;
          }else{
            return $this->model->getComentarios();
          }
        break;
      case 'DELETE':
        $this->login_controller->checkLogin();
        if($this->login_controller->getTipo()>0){
          if(count($argumentos)>0){

            $comentario= $this->model->eliminarComentario($argumentos[0]);
            $error['Error'] = "El comentario no existe";
            $success['Success'] = "El comentario se borro";
            return($comentario==1) ? $success : $error;
          }

        }

        break;
        case 'POST' :
        $this->login_controller->checkLogin();
          if($this->login_controller->getTipo()==0){
            if(count($argumentos)==0){
              if(((isset($_REQUEST['user'])))&&(isset($_REQUEST['texto']))&&(isset($_REQUEST['rate']))&&(isset($_REQUEST['producto']))){
                  if(((!empty($_REQUEST['user'])))&&(!empty($_REQUEST['texto']))&&(!empty($_REQUEST['rate']))&&(!empty($_REQUEST['producto']))){
                      $comentario= $this->model->crearComentario($_POST['user'],$_POST['texto'],$_POST['rate'],$_POST['producto']);
                      $error['Error'] = "El comentario no se creo";
                      $success['Success'] = "El comentario se creo";
                      return($comentario==1) ? $success : $error;
                  }
              }
            }
            else{
                if(count($argumentos)>0){
                    $comentario= $this->model->editarComentario($argumentos[0],$_POST['texto']);
                    $error['Error'] = "El comentario no se edito";
                    $success['Success'] = "El comentario se edito";
                    return($comentario==1) ? $success : $error;
                }
            }
          }
            break;

      default:
           return "Only accepts GET";
        break;
    }
   }
}
 ?>
