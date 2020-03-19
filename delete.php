<?php
require 'config.php';

$nome = $_POST['nome'];
$id = $_GET['id'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

$sql = "DELETE FROM usuario WHERE id = '{$id}'";
    echo'<pre>';
    print_r($sql);
    //die();
$pdo=$conn->prepare($sql);
if($pdo->execute()){
    header('Location: select.php');
}else{
    echo 'erro';
}