<?php

class contactoModel
{

  private $db;

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;dbname=instrumento;charset=utf8', 'root', '');
  }
  function enviarContacto($consulta){
     $sentencia = $this->db->prepare("INSERT INTO contacto(nombre,email,mensaje)"."VALUES(:nombre, :email, :mensaje)");
     $sentencia->execute( array(":nombre"=>$consulta['nombre'] ,":email"=>$consulta['email'],":mensaje"=>$consulta['mensaje']));
   }
}
