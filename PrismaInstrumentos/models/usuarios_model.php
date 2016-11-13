<?php

include_once ("models/model.php");
class usuarios_model extends model
{



  function getUser($user){
     $sentencia = $this->db->prepare( "select * from user where email = ?");
     $sentencia->execute(array($user));

     return $sentencia->fetch(PDO::FETCH_ASSOC);

   }


   function registrar($user,$hash){
        $sentencia = $this->db->prepare("INSERT INTO user(email,pass) VALUES(?,?)");
        $sentencia->execute( array($user,$hash));

      }
  function getUsuarios(){
      $sentencia = $this->db->prepare( "select * from user where permiso_adm != 1");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }


}






 ?>
