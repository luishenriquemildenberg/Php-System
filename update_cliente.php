<?php
require 'config.php';

$id = $_GET['id'];
$nome = $_GET['nome'];
$sobrenome = $_GET['sobrenome'];
$contato = $_GET['contato'];
$cidade = $_GET['cidade'];
$qtd = $_GET['qtd'];

$sql =      "UPDATE cliente
             SET nome = '{$nome}', sobrenome = '{$sobrenome}', contato = '{$contato}', cidade = '{$cidade}', qtd = '{$qtd}'
             where id = '{$id}'; 
             "; // ver id

$pdo = $conn->prepare($sql);
// $x = $pdo->execute();
// echo '<pre>'; 
// print_r($pdo);
// die();
if ($pdo->execute()) {
    echo 'atualizado com sucesso';
    header('Location: cliente.php');
} else {
    echo 'erro';
}
