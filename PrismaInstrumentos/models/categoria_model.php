<?php
class categoria_model{


  private $db;

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;dbname=instrumento;charset=utf8', 'root', '');

  }





  function agregaCat($categoria,$imagenes){
    $sentencia = $this->db->prepare("INSERT INTO categorias(categoria)"."VALUES(:categoria)");
    $sentencia->execute( array(":categoria"=>$categoria['categoria']));
    $id_cat = $this->db->lastInsertId();

    foreach ($imagenes as $key => $imagen) {
      $path="images/".uniqid()."_".$imagen["name"];
      move_uploaded_file($imagen["tmp_name"], $path);
      $insertImagen = $this->db->prepare("INSERT INTO imagen(path,fk_id_cat) VALUES(?,?)");
      $insertImagen->execute(array($path,$id_cat));
    }
    return $id_cat;
  }

  function getImagenes($id_cat){
    $sentencia = $this->db->prepare( "select * from imagen where fk_id_cat=?");
    $sentencia->execute(array($id_cat));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function getCategorias(){

      $sentencia= $this->db->prepare( "select * from  categorias");
      $sentencia->execute();
      $categorias=$sentencia->fetchAll(PDO::FETCH_ASSOC);
      foreach ($categorias as $key => $categoria) {
        $categorias[$key]['imagenes']=$this->getImagenes($categoria['id_categoria']);
      }
      return $categorias;
  }



  function eliminarcategoria($id){
    $sentencia = $this->db->prepare("delete from categorias where id_categoria=?");

    $sentencia->execute((array($id['id'])));

  }
  function editarCategoria($info){
        $sentencia = $this->db->prepare("update categorias set categoria=? where id_categoria=?");
        $sentencia->execute((array($info['categoria'],$info['id'])));
  }





}



 ?>
