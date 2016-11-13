<?php
require_once ("libs/Smarty.class.php");

class usuarios_view{



 private $smarty;
   function __construct()
   {
   $this->smarty= new Smarty();
   }


   function iniciar_user($verif,$tipo){
     $this->smarty->assign('verif',$verif);
     $this->smarty->assign('tipo',$tipo);

     $this->smarty->display("index.tpl");

   }
   function mostrarInst($prod,$cat){
     $this->smarty->assign('productos',$prod);
     $this->smarty->assign('categorias',$cat);
     $this->smarty->display("instrumentos.tpl");
   }

}



?>
