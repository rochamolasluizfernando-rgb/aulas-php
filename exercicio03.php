<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03: condicionais e uso do PHP intercalado com HTML</title>
</head>
<style>
    section {
        padding: 4px;
        margin: auto;
        width: 50%;
        border: solid 1px;
    }

    .infantil { background-color: pink; }
    .adulto { background-color: blue; }
    .melhor-idade { background-color: yellow; }
</style>
<body>
    <h1>Exercício 03: condicionais e uso do PHP intercalado com HTML</h1>
    <hr>
<?php 
$idade = 80;
if($idade < 12){
    $ingresso = 25.00;
    $categoria = "Infantil";
    $estilo = "infantil";
} 
elseif($idade < 60){
    $ingresso = 40.00;
    $categoria = "Adulto";
    $estilo = "adulto";
}
else {
    $ingresso = 20.00;
    $categoria = "Melhor Idade";
    $estilo = "melhor-idade";
}
?>
<section class="<?= $estilo ?>">
    <h2>Categoria: <?= $categoria ?> </h2>
    <p>Idade: <b><?= $idade ?> anos</b></p>
    <p>Preço: R$ <?= number_format($ingresso, 2) ?></p>
</section>
</body>
</html>