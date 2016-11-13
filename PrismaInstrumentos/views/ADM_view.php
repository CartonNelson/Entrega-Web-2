<?php
 require_once ("libs/Smarty.class.php");

class ADM_view{



  private $smarty;
    function __construct()
    {
    $this->smarty= new Smarty();
    }

    function iniciar_ADM($prod,$cat,$users){

      $this->smarty->assign('productos',$prod);
      $this->smarty->assign('categorias',$cat);
      $this->smarty->assign('usuarios',$users);

      $this->smarty->display("admin.tpl");
    }

    function mostrarUsuarios($usuarios){
      $this->smarty->assign('user',$usuarios);
      $this->smarty->display('lista_prod.tpl');
    }

    function mostrarProductos($productos){
      $this->smarty->assign('productos',$productos);
      $this->smarty->display('lista_prod.tpl');
    }
    function mostrarInst($prod,$cat){
      $this->smarty->assign('productos',$prod);
      $this->smarty->assign('categorias',$cat);
      $this->smarty->display("instrumentos.tpl");
    }

    function mostrarCat($categorias){
      $this->smarty->assign('categorias',$categorias);
      $this->smarty->display('lista_cat.tpl');
    }
}



 ?>
