<?php
include_once ('models/model.php');
class contactoModel extends model
{

  function enviarContacto($consulta){
     $sentencia = $this->db->prepare("INSERT INTO contacto(nombre,email,mensaje)"."VALUES(:nombre, :email, :mensaje)");
     $sentencia->execute( array(":nombre"=>$consulta['nombre'] ,":email"=>$consulta['email'],":mensaje"=>$consulta['mensaje']));
   }
}

?>
