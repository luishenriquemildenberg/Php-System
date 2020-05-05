<?php
require_once('config.php');
require_once("seguranca.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


  $email = (isset($_POST['email'])) ? $_POST['email'] : '';
  $senha = (isset($_POST['pass'])) ? $_POST['pass'] : '';

  // var_dump($_POST);

  $sql =   "SELECT email, pass
            FROM usuario
            WHERE email = '{$email}' 
            AND pass = md5('{$senha}')
            ";

  try {

    $result = $conn->query($sql); // consultando utiliza o query

    if ($result->fetchColumn()) { 
        header("Location: view/home.php"); // tem que trocar se não for usar o padrão mvc
    }else{
      header ("location: ./");
    }
  } catch (Exception $e) {
    echo 'ERROR: ' . $e->getMessage();
  }
}

