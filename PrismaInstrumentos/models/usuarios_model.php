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
      $sentencia = $this->db->prepare( "select * from user where permiso_adm != 5");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function getUser_id($id){
     $sentencia = $this->db->prepare( "select * from user where id_usuario = ?");
     $sentencia->execute(array($id));

     return $sentencia->fetch(PDO::FETCH_ASSOC);

   }

  function editarPermiso($id){

    $usuario=$this->getUser_id($id);
    $sentencia = $this->db->prepare("update user set permiso_adm=? where id_usuario=?");
    $sentencia->execute(array(!($usuario['permiso_adm']),$id));


  }


}






 ?>
