<?php

  require('Converter.php');

  if(isset($_POST['nombre']) && isset($_POST['enviar'])){
    $form = $_POST['outputFormat'];
    if(!empty($form) && !empty($_POST['nombre'])){
      $convertidor = new Converter($_POST['nombre'] , $_POST['outputFormat']);
    }
    else{
      echo "no";
    }
  }



?>
