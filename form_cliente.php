<?php include 'header.php'; ?>
<!-- <div class="title"> -->
<div class="sticky-top"><b>Cadastro de Cliente</b></div>
<div class="cssformulario">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <form method="GET" action="insert_cliente.php">
        <div class="form-row" style="margin:auto">
            <input type='hidden' name='id' value="<?= $_GET['id'] ?>" />
            <div class="col-md-4 mb-3">
                <label for="validationDefault01">Nome: </label>
                <input type="text" class="form-control" name="nome" id="validationDefault01" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationDefault02">Sobrenome: </label>
                <input type="text" class="form-control" name="sobrenome" id="validationDefault02" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationDefault07">Contato: </label>
                <div class="input-group">
                    <input type="text" class="form-control" name="contato" id="validationDefault07" required>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationDefault03">Cidade: </label>
                <input type="text" class="form-control" name="cidade" id="validationDefault03" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationDefault04">Endereco: </label>
                <input type="text" class="form-control" name="endereco" id="validationDefault04" required>
            </div>
            <div class="col-md-2 mb-3">
                <label for="validationDefault05">Data Entrada: </label>
                <input id="datetime-local" type="date" class="form-control" name="data_entrada" id="validationDefault05" placeholder="00/00/0000" required>
            </div>
            <div class="col-md-2 mb-3">
                <label for="validationDefault05">Data Entrega: </label>
                <input id="date" type="date" class="form-control" name="data_entrega" id="validationDefault05" placeholder="00/00/0000" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationDefault05">Quantidade: </label>
                <input type="text" class="form-control" name="qtd" id="validationDefault05" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationDefault05">Valor: </label>
                <input placeholder="R$ 00,00" type="text" class="form-control" name="valor" id="validationDefault05" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationDefault05">Total: </label>
                <input placeholder="R$ 00,00" type="text" class="form-control" name="total" id="validationDefault05" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationDefault06">Observações: </label>
                <textarea rows="4" cols="60" name="observacao" id="validationDefault06" placeholder="Digite as Observações da sua encomenda" required> </textarea>
            </div>
            </br>
            <div class="botaoconfirma">
                <button class="btn btn-primary" type="submit">Confirmar Cadastro</button>
            </div>
        </div>
</div>
</br>
</form>
</div>
</div>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>



<textarea id="wmd-input" name="post-text" class="wmd-input s-input bar0 js-post-body-field processed" data-post-type-id="2" cols="92" rows="15" tabindex="101" data-min-length=""></textarea>