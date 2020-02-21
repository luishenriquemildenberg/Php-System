<?php
require 'config.php';

$nome = $_GET['nome'];
$id = $_GET['id'];
$sobrenome = $_GET['sobrenome'];
$email = $_GET['email'];
$pass = $_GET['pass'];
$cidade = $_GET['cidade'];
$estado = $_GET['estado'];

$sql =      "UPDATE usuario
             SET nome = '{$nome}', sobrenome = '{$sobrenome}', email = '{$email}', pass = '{$pass}', cidade = '{$cidade}', estado = '{$estado}'
             where id = '{$id}'; 
             "; // ver id

$pdo = $conn->prepare($sql);
// $x = $pdo->execute();
// echo '<pre>';
// print_r($x);
// die();
if ($pdo->execute()) {

    echo 'atualizado com sucesso';
    header('Location: select.php');
} else {
    echo 'erro';
}
