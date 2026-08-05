<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03: condicionais e uso do PHP intercalado com HTML</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        padding: 20px;
    }

    .ingresso {
        width: 350px;
        padding: 20px;
        border-radius: 10px;
        border: 3px solid #333;
        margin: 20px auto;
    }

    .infantil {
        background-color: #b3e5fc;
        border-color: #0288d1;
    }

    .adulto {
        background-color: #c8e6c9;
        border-color: #388e3c;
    }

    .melhor-idade {
        background-color: #fff9c4;
        border-color: #fbc02d;
    }
</style>
<body>
    <h1>Exercício 03: condicionais e uso do PHP intercalado com HTML</h1>
    <hr>
<?php 
$idade = 60;

if($idade < 12){
    $categoria = "Infantil";
    $valor = 25.00;
    $classe = "infantil";
} 
elseif($idade < 60){
    $categoria = "Adulto";
    $valor = 40.00;
    $classe = "adulto";
}
else {
    $categoria = "Melhor Idade";
    $valor = 20.00;
    $classe = "melhor-idade";
}

?>

<div class="ingresso <?= $classe ?>">
    <h2>Ingresso do Show</h2>

    <p><strong>Idade:</strong> <?= $idade ?> anos</p>

    <p><strong>Categoria:</strong> <?= $categoria ?> </p>

    <p>
        <strong>Valor:</strong>
        R$ <?= number_format($valor, 2) ?>
    </p>
</div>

</div>
</body>
</html>