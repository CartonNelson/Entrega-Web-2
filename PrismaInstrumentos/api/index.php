<?php
  require 'comentarios_API.php';
  try {
    $api_handler = new comentarios_API($_REQUEST['request']);
    echo $api_handler->processAPI();
  } catch (Exception $e) {
      echo json_encode(Array('error' => $e->getMessage()));
  }
 ?>
