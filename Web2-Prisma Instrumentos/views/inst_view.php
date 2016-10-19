<?php
require ("libs/Smarty.class.php");

class inst_view{



  private $smarty;
    function __construct()
    {
    $this->smarty= new Smarty();
    }
    function iniciar(){
      $this->smarty->display("index.tpl");

    }
    function iniciar_ADM($prod,$cat){

      $this->smarty->assign('productos',$prod);
      $this->smarty->assign('categorias',$cat);
      $this->smarty->display("admin.tpl");
    }
    function mostrarInst($prod,$cat){
      $this->smarty->assign('productos',$prod);
      $this->smarty->assign('categorias',$cat);
      $this->smarty->display("instrumentos.tpl");
    }
    function mostrarProductos($productos){
      $this->smarty->assign('productos',$productos);
      $this->smarty->display('lista_prod.tpl');
    }
    function mostrarCat($categorias){
      $this->smarty->assign('categorias',$categorias);
      $this->smarty->display('lista_cat.tpl');
    }
}



 ?>
