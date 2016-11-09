<?php
require 'api.php';
require '../models/coment_model.php';

class TareaApi extends Api
{
  private $model;

  public function __construct($request)
 {
    parent::__construct($request);
    $this->model = new coment_model();
  }

  protected function coment($argumentos){
    switch ($this->method) {
      case 'GET':

      break;

      case 'DELETE':

      break;

      case 'POST':

      break;

    default:
          return "Only accepts GET";
    break;
    }
   }



}





 ?>
