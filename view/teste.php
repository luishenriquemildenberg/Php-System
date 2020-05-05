<?php include 'header.php';?>
<?php include 'footer.php';?>

<div class='container mt-4'>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Primeiro</th>
                <th scope="col">Ultimo</th>
                <th scope="col">@nick</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Luis</td>
                <td>Henrique</td>
                <td>@luishenrique</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Pamela</td>
                <td>Pronhow</td>
                <td>@pampronhow</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table>
</div>

<?php

$arrNotas = [
    "aluno1" => [
        "Nome : " => "Luis",
        "Nota: " => 7
    ],
    "aluno2" => [
        "Nome : " => "Henrique",
        "Nota: " => 5
    ],
    "aluno3" => [
        "Nome : " => "Mildenberg",
        "Nota: " => 9
    ],
];

foreach ($arrNotas as $aluno) {
    foreach ($aluno as $chave => $valor) {
        echo "{$chave} = {$valor} <br>";
    }
    echo "<br>";
}

$arrFrutas = ["abacaxi", "maça", "banana", "pera"];

foreach ($arrFrutas as $f) {
    echo "Fruta: " . $f . "<br>";
}

$nomes = [
    1 => "Luis",
    2 => "Henrique",
    3 => "Mildenberg",
    4 => "CARNEIRO",
    5 => "PAMELA",
    6 => "PRONHOW"
];

foreach ($nomes as $c => $n) {
    echo "Chave: {$c}  Nomes {$n} <br>";
}

?>
<ul>
    <?php
    foreach ($nomes as $n) {
    ?>
        <li><?= $n ?></li>
    <?php
    }
    ?>
</ul>

<?php
function ExibeNomeEmail($nome, $email)
{
    echo "meu nome é {$nome} e meu email é: {$email}";
}

?>
<div>
    <h1>qual seu nome?</h1>
    <?= ExibeNomeEmail("Luis", "Henrique@gmail.com") ?>
</div>

<?php
function Ajuste($p1, $p2)
{
    return (($p1 * $p2) / 4);
}
?>

<h1> <?= Ajuste(3, 10) ?></h1>


<?php

// $salario = 3265.76;
// $valorAjuste = 0;

// function valorAjuste($salario, &$valorAjuste){ // passa com & apenas na criação da função
//     $valorAjuste = 300.00;

//     return ($salario + $valorAjuste); 

// }
// $valorFinal = valorAjuste($salario, $valorAjuste);
// echo"O valor com ajuste é:<b> {$valorFinal}</b>, com o aumento de: <b>{$valorAjuste}</b>"

?>


<?php

$pessoas = [
    1 => "Luis",
    2 => "Pamela",
    3 => "Almir",
    4 => "José",
    5 => "Carneiro"
];

foreach ($pessoas as $p => $c) {
    // echo"<pre>";
    // print_r($pessoas);
    // die();
    echo "Meu nome é: {$c} estou na chave : {$p} <br>";
}


?>

<?php

$carros = [
    "gol",
    "chevette",
    "passat",
    "hb20"
];

foreach ($carros as $c) {
    // var_dump($c);
    // die();
    echo "carro: {$c} <br>";
}
?>

<?php
$valorSalario = 1000;
$valorAjuste = 0;

function ajustaSalario($valorSalario, &$valorAjuste)
{
    $valorAjuste = 500;

    return ($valorSalario + $valorAjuste);
}
$valorTotalDaPorraToda = ajustaSalario($valorSalario, $valorAjuste);
echo "meu ganho a mais deste mês foi: <b>{$valorAjuste}</b> que totalizou: <b>{$valorTotalDaPorraToda}</b>"

?>

</br>

<?php
$valorAtual = 2000;


$valorAjustado = 0;

function valorCorreto($valorAtual,&$valorAjustado){
    $valorAjustado = 1200;

    return($valorAtual + $valorAjustado);
}

$totaldetudo = valorCorreto($valorAtual, $valorAjustado);

echo"eu ganhava {$valorAtual} tive um aumento de {$valorAjustado} e agora to ganhando {$totaldetudo}";



?>
</br>
</br>
</br>
<!-- 
< ?php
for($i=1; $i < 10; $i++){ ?>
< ?php    for($j=1; $j <=10; $j++){ ?>
<br>
< ?php echo($i. " x ".$j. " = ".$i * $j); ?>
< ?php echo"</br>" ?>
< ?php  } 
 }
 
 ?> -->

<?php
$num = 1999.9;
$formattedNum = number_format($num)."<br>";
echo $formattedNum;
$formattedNum = number_format($num, 2);
echo $formattedNum;
?>
<script>
 $(".ValoresItens").inputmask('R$ 999.999.999,99', { numericInput: true});
</script>
 <form>
  <label for="fname"><b>Valor R$</b></label><br>
  <input type="text" id="valor" name="valordaporratoda" value="00,00"><br>
</form>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>