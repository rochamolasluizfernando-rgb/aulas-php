<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Recebimento e processamenro dos dados</h1>
    <hr>
<?php 
// Capturando os dados de cada campo
$nome = $_POST["nome"];
$email = $_POST["email"];
$idade = $_POST["idade"];
$mensagem = $_POST["mensagen"];

/* Operador ?? -> coalescência nula
Caso nenhum interesse seja selecionado, 
a variável guardará um array vazio */
$interesses = $_POST["interesses"];

// Caso nenhuma opção seja selecionada, o valor "não" fico como padrão 
$informativos = $_POST["informativos"];
?>
    <h2>Dados recebidos</h2>
    <p>Nome: <?= $nome ?></p>
    <p>E-mail: <?= $email ?></p>
    <p>Idade: <?= $idade ?></p>
    <p>Mensagem: <?= $mensagem ?></p>

    <?php if(!empty($interesses)): ?>
    <p>Interesses: <?= implode(",", $interesses) ?></p>
    <?php endif; ?>

    <p>Informativos:
        <?= $informativos === 'sim' ? "Sim" : "Não" ?>
    </p>

</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+
    D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>