


<?php
require_once 'config.php';

if (isset($_POST['email']) && empty(!$_POST['email'])) {

    $nome  = $_GET['nome'];
    $sobrenome  = $_GET['sobrenome'];
    $email = $_GET['email'];
    $senha = md5(addslashes($_GET['pass']));
    $cidade  = $_GET['cidade'];
    $estado  = $_GET['estado'];

    try {

        $sql = "INSERT INTO usuario 
                (nome, sobrenome, email, pass, cidade, estado) 
                VALUES 
                ('{$nome}', '{$sobrenome}', '{$email}', '{$senha}', '{$cidade}', '{$estado}')
            ";

        $pdo = $conn->prepare($sql);
        $pdo->execute();

        echo'<pre>';
        print_r($pdo);
        die;

        header("Location: index.html");
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
