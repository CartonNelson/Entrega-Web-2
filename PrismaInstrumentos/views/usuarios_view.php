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


}



?>
