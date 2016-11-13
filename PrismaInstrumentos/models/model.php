<?php
include_once 'sql/config.php';
abstract class model{

  protected $db;

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;dbname=instrumento;charset=utf8', 'root', '');
  }



  //function __construct() {
    //try {
      //$this->db = new PDO('mysql:host='.HOST.';dbname='.rtrim(DBNAME).';charset=utf8', 'root','');
    //} catch (PDOException $e) {
      //  header('Location: sql');
        //die();
  //  }
  //}
}

 ?>
