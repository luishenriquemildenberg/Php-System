<?php
require_once 'config.php';
require 'functions.php';

    // print_r($_GET);
    // die;

    $nome = $_GET['nome'];
    $sobrenome = $_GET['sobrenome'];
    $contato = $_GET['contato'];
    $cidade = $_GET['cidade'];
    $endereco = $_GET['endereco'];
    $qtd = $_GET['qtd'];
    $observacao = $_GET['observacao'];
    $data_entrada = date($_GET['data_entrada']);
    $data_entrega = date($_GET['data_entrega']);
    $valor = $_GET['valor'];
    $total = $_GET['total'];
    

    try {
        $sql = "INSERT INTO cliente
            (nome, sobrenome, contato, cidade, endereco, qtd, observacao, data_entrada, data_entrega, valor, total )
            VALUES
            ('{$nome}', '{$sobrenome}', '{$contato}', '{$cidade}', '{$endereco}', '{$qtd}', '{$observacao}', '{$data_entrada}', '{$data_entrega}',  '{$valor}',  '{$total}' )
            ";

        // echo __LINE__ .'</br>';

        $pdo = $conn->prepare($sql);
        // echo '<pre>';
        // print_r($pdo);
        // die;
        $pdo->execute();

        header("Location: home.php");
    } catch (PDOException $e) {
        echo $e->getMessage();
        // echo'Erro ao cadastrar cliente';
    }