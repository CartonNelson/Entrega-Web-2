<?php
include_once ("../models/model.php");
class comentarios_model extends model
{

  function getComentarios()
  {
    $sentencia = $this->db->prepare("select * from comentario");
    $sentencia->execute();
    $comentarios=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    return $comentarios;

  }
  function eliminarComentario($id_comentario){
    $sentencia = $this->db->prepare("delete from comentario where id_coment=?");
    $sentencia->execute((array($id_comentario)));
    return $sentencia->rowCount();
}
  function editarComentario($id_coment,$texto){

       $sentencia = $this->db->prepare("update comentario set texto=? where id_coment=?");
       $sentencia->execute(array($texto, $id_coment));
       return $sentencia->rowCount();


  }
  function crearComentario($usuario,$texto,$rate,$producto){
    $sentencia = $this->db->prepare("INSERT INTO comentario(user,texto,rate,producto)VALUES(?, ?, ?, ?)");
    $sentencia->execute( array($usuario,$texto,$rate,$producto));
    return $sentencia->rowCount();

  }

  }


 ?>
