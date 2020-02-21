<?php
require_once 'config.php';

if (isset($_POST['email']) && empty(!$_POST['email'])) {

    $nome  = $_POST['nome'];
    $sobrenome  = $_POST['sobrenome'];
    $email = $_POST['email'];
    $senha = md5(addslashes($_POST['pass']));
    $cidade  = $_POST['cidade'];
    $estado  = $_POST['estado'];

    try {

        $sql = "INSERT INTO usuario 
                (nome, sobrenome, email, pass, cidade, estado) 
                values 
                ('{$nome}', '{$sobrenome}', '{$email}', '{$senha}', '{$cidade}', '{$estado}')
            ";

        $pdo = $conn->prepare($sql);
        $pdo->execute();

        header("Location: index.html");
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
