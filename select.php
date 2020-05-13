<?php
require_once 'config.php';
include 'view/header.php';
?>
<?php
try {

    $sql = "SELECT * FROM usuario ORDER BY id ";
    $pdo = $conn->prepare($sql);
    $pdo->execute();
    $result = $pdo->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/main.css" />

<div class="container-home100">
    <div class="container">
        <div class='container pt-4'>
            <form action="insert.php" method="GET">
                <table class="table table-sm table-hover">
                    <tr>
                        <td><b>Id</td>
                        <td><b>Nome</td>
                        <td><b>Sobrenome</td>
                        <td><b>Email</td>
                        <td><b>Estado</td>
                        <td><b>Cidade</td>
                        <td><b>Ações</td>
                    </tr>
        </div>
    </div>
    <?php

    if (count($result) < 1) {
        echo 'não temos usuários cadastrados';
    }


    if (count($result) > 0) {
        foreach ($result as $usuario) {

            echo '<tr>';

            echo "<td>{$usuario["id"]}</td>";
            echo "<td>{$usuario["nome"]}</td>";
            echo "<td>{$usuario["sobrenome"]}</td>";
            echo "<td>{$usuario["email"]}</td>";
            echo "<td>" . utf8_encode(utf8_decode($usuario["estado"])) . "</td>";
            echo "<td>{$usuario["cidade"]}</td>";
            echo "<td><a href='seleciona_usuario.php?id=" . $usuario['id'] . "'>Editar</a>";
            echo "<button type='button' class='btn btn-link' onclick='confirmacao({$usuario['id']});'>Remover registro </button> </td>";

            echo '</tr>';
        }
    }

    ?>
    <script>
        function confirmacao(id) {

            var resposta = confirm("Deseja remover esse registro?");

            if (resposta == true) {
                window.location.href = "delete.php?id=" + id;
            } else {
                window.location.href = "select.php";
            }
        }
    </script>
    </tbody>
    </table>
    </form>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>