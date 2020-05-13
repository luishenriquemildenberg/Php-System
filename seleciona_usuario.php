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
<form method="GET" action="update.php">
<input type= 'hidden' name='id' value="<?= $_GET['id'] ?>"/>
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
    </div>
    <div class="col-md-4 mb-3">
        <label for="validationSenha">Senha</label>
        <input type="password" class="form-control" name="pass" id="senha01" value="<?= $result['pass'] ?>">
    </div>
    <div class="col-md-4 mb-3">
        <label for="validationDefault04">Estado</label>
        <select class="custom-select" id="validationDefault04" name="estado" value="<?= $result['estado'] ?>" required>
            <option value="Acre">Acre</option>
            <option value="Alagoas">Alagoas</option>
            <option value="Amapá">Amapá</option>
            <option value="Amazonas">Amazonas</option>
            <option value="Bahia">Bahia</option>
            <option value="Ceará">Ceará</option>
            <option value="Distrito Federal">Distrito Federal</option>
            <option value="Espírito Santo">Espírito Santo</option>
            <option value="Goiás">Goiás</option>
            <option value="Maranhão">Maranhão</option>
            <option value="Mato Grosso">Mato Grosso</option>
            <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
            <option value="Minas Gerais">Minas Gerais</option>
            <option value="Pará">Pará</option>
            <option value="Paraíba">Paraíba</option>
            <option value="Paraná">Paraná</option>
            <option value="Pernambuco">Pernambuco</option>
            <option value="Piauí">Piauí</option>
            <option value="Rio de Janeiro">Rio de Janeiro</option>
            <option value="Rio Grande do Sul">Rio Grande do Sul</option>
            <option value="Rio Grande do Norte">Rio Grande do Norte</option>
            <option value="Rondônia">Rondônia</option>
            <option value="Roraima">Roraima</option>
            <option value="Santa Catarina">Santa Catarina</option>
            <option value="São Paulo">São Paulo</option>
            <option value="Sergipe">Sergipe</option>
            <option value="Tocantins">Tocantins</option>
        </select>
    </div>
    </div>
    <div class="col-md-4 mb-3">
        <label for="validationDefault03">Cidade</label>
        <input type="text" class="form-control" name="cidade" id="validationDefault03" value="<?= $result['cidade'] ?>" required>
    </div>
    <div class="form-group">
        <button class="btn btn-primary" type="submit">Confirmar Alteração</button>
    </div>
    </br>
</form>
</div>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>