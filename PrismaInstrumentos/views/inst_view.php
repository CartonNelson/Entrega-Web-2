<?php
 require_once ("libs/Smarty.class.php");

class inst_view{



  private $smarty;
    function __construct()
    {
    $this->smarty= new Smarty();
    }


    function iniciar($user,$tipo){
      $this->smarty->assign('verif',$user);
      $this->smarty->assign('tipo',$tipo);
      $this->smarty->display("index.tpl");

    }
    function mostrarError($msj,$color){
    $this->smarty->assign('msj',$msj);
    $this->smarty->assign('color',$color);
    $user=[];
    $tipo=-1;
    $this->iniciar($user,$tipo);
  }


}



 ?>
