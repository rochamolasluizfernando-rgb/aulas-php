<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04</title>
</head>
<body>
<div class="container">
    <h1>Linguagens e Tecnologias Web</h1>
    <hr>

<?php
$linguagens = [
    [
        "id" => 1,
        "nome" => "HTML",
        "descricao" => "Estruturação de páginas web"
    ],
    [
        "id" => 2,
        "nome" => "CSS",
        "descricao" => "Estilos"
    ],
    [
        "id" => 3,
        "nome" => "JavaScript",
        "descricao" => "Comportamentos"
    ],
    [
        "id" => 4, 
        "nome" => "PHP",
        "descricao" => "Back-End" 
    ],
    [
        "id" => 5,
        "nome" => "SQL",
        "descricao" => "Manipulação de Dados"
    ]
];
?>
    <h2>Lista de Linguagens</h2>
    <ul>
    <?php foreach ($linguagens as $linguagem) { ?>
        <li>
                <b>ID:</b> <?= $linguagem["id"] ?><br>
                <b>Linguagem:</b> <?= $linguagem["nome"] ?><br>
                <b>Descrição:</b> <?= $linguagem["descricao"] ?>
        </li>
    <?php } ?>
    </ul>
</div>
</body>
</html>