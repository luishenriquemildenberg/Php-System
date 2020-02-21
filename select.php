<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<?php
require_once 'config.php';
try {

    $sql = "SELECT * FROM usuario";
    $pdo = $conn->prepare($sql);
    $pdo->execute();
    $result = $pdo->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
<div class='container mt-4'>
    <form action="insert.php" method="GET">
        <table class="table table-sm table-hover">
            <tr>

                <td>Id</td>
                <td><b>Nome</td>
                <td><b>Sobrenome</td>
                <td><b>Email</td>
                <td><b>Estado</td>
                <td><b>Cidade</td>

            </tr>
            <tbody>

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
                        echo "<td><a href='seleciona_usuario.php?id=" . $usuario['id'] . "'>Editar</a> </td>";
                        echo "<td><button type='button' class='btn btn-link' onclick='confirmacao({$usuario['id']});'>Remover registro </button>";

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
<!-- 
<html>
<head>
<script language="Javascript">
function confirmacao(id) {
     var resposta = confirm("Deseja remover esse registro?");
 
     if (resposta == true) {
          window.location.href = "remover.php?id="+id;
     }
}
</script>
</head>
 
<body>
<a href="javascript:func()"
onclick="confirmacao('1')">Remover registro #1</a>
 
<a href="javascript:func()"
onclick="confirmacao('2')">Remover registro #2</a>
 
<a href="javascript:func()"
onclick="confirmacao('3')">Remover registro #3</a>
</body>
</html> -->