<?php
include_once ("models/model.php");
class instrumentos_model extends model
{


  function agregarProducto($instrumento){

     $sentencia = $this->db->prepare("INSERT INTO productos(categoria,marca,modelo,precio)"."VALUES(:categoria, :marca, :modelo, :precio)");
     $sentencia->execute( array(":categoria"=>$instrumento['categoria'] ,":marca"=>$instrumento['marca'],":modelo"=>$instrumento['modelo'],":precio"=>$instrumento['precio']));
   }
  function getProductos(){

      $sentencia= $this->db->prepare( "select * from  productos");
      $sentencia->execute();
      $productos=$sentencia->fetchAll(PDO::FETCH_ASSOC);

      return $productos;
  }
  function eliminarProducto($id){
    $sentencia = $this->db->prepare("delete from productos where id_producto=?");

    $sentencia->execute((array($id['id'])));
  }


  function getProducto($id){
    $prod = $this->db->prepare( "select * from productos where id_producto=?");
    $prod->execute(array($id));
    return $prod->fetch(PDO::FETCH_ASSOC);

  }

  function editarStock($info){
    $prod=$this->getProducto($info);
    $sentencia = $this->db->prepare("update productos set stock=? where id_producto=?");
    $sentencia->execute(array(!($prod['stock']),$info));
  }






  
  function editarProducto($marca,$modelo,$precio,$categoria,$id_producto){
    if (!empty($marca)) {
     $sentencia = $this->db->prepare("update productos set marca=? where id_producto=?");
     $sentencia->execute(array($marca, $id_producto));
   }
   if (!empty($modelo)) {
    $sentencia = $this->db->prepare("update productos set modelo=? where id_producto=?");
    $sentencia->execute(array($modelo, $id_producto));
  }
  if (!empty($precio)) {
   $sentencia = $this->db->prepare("update productos set precio=? where id_producto=?");
   $sentencia->execute(array($precio, $id_producto));
 }
 if (!empty($categoria)) {
  $sentencia = $this->db->prepare("update productos set categoria=? where id_producto=?");
  $sentencia->execute(array($categoria, $id_producto));
}
  }

}

?>
