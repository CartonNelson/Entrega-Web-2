<?php
require 'api.php';
require '../models/comentarios_model.php';
include_once '../sql/config.php';

class comentarios_API extends api
{
  private $model;
  public function __construct($request)
 {
    parent::__construct($request);
    $this->model = new comentarios_model();
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
        if(count($argumentos)>0){
          $comentario= $this->model->eliminarComentario($argumentos[0]);
          $error['Error'] = "El comentario no existe";
          $success['Success'] = "El comentario se borro";
          return($comentario==1) ? $success : $error;
        }
        break;
        case 'POST' :
        if(count($argumentos)==0){
              $comentario= $this->model->crearComentario($_POST['user'],$_POST['texto'],$_POST['rate'],$_POST['producto']);
              $error['Error'] = "El comentario no se creo";
              $success['Success'] = "El comentario se creo";
              return($comentario==1) ? $success : $error;
            }
            else{
              if(count($argumentos)>0){

                $comentario= $this->model->editarComentario($argumentos[0],$_POST['texto']);

                $error['Error'] = "El comentario no se edito";
                $success['Success'] = "El comentario se edito";
                return($comentario==1) ? $success : $error;
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
