<?php
 require_once ("libs/Smarty.class.php");

class ADM_view{

  private $smarty;

  function __construct() {
    $this->smarty= new Smarty();
  }

  function iniciar_ADM($prod,$cat,$users,$tipoSesion){
      $this->smarty->assign('productos',$prod);
      $this->smarty->assign('categorias',$cat);
      $this->smarty->assign('usuarios',$users);
      $this->smarty->assign('tipo',$tipoSesion);
      $this->smarty->display("admin.tpl");
  }

  function mostrarInst($prod,$cat,$tipo,$email){
      $this->smarty->assign('productos',$prod);
      $this->smarty->assign('categorias',$cat);
      $this->smarty->assign('tipo',$tipo);
      $this->smarty->assign('email',$email);
      $this->smarty->display("instrumentos.tpl");
  }
}
?>
