<?php
require 'config.php';
$id = $_GET['id'];

$sql = "SELECT *
        FROM usuario 
        WHERE id = {$id}";

$pdo = $conn->prepare($sql);
$pdo->execute();
$result = $pdo->fetch(PDO::FETCH_ASSOC);

?>
<div class="cssformulario">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <form method="GET" action="update.php">
        <input type='hidden' name='id' value="<?= $_GET['id'] ?>" />
        <div class="col-md-4 mb-3">
            <label for="validationDefault01">Nome</label>
            <input type="text" class="form-control" name="nome" id="validationDefault01" value="<?= $result['nome'] ?>" required>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationDefault02">Sobrenome</label>
            <input type="text" class="form-control" name="sobrenome" id="validationDefault02" value="<?= $result['sobrenome'] ?>" required>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationDefaultUsername">E-mail</label>
            <div class="input-group">
                <input type="text" class="form-control" name="email" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" value="<?= $result['email'] ?>" required>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationDefault03">Cidade</label>
            <input type="text" class="form-control" name="cidade" id="validationDefault03" value="<?= $result['cidade'] ?>" required>
        </div>
        <div class="col-md-1 mb-1">
            <label for="validationDefault01">Quantidade</label>
            <input type="text" class="form-control" name="nome" id="validationDefault01" value="<?= $result['qdt'] ?>" required>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Confirmar Alteração</button>
        </div>
        </br>
    </form>
</div>
</div>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>