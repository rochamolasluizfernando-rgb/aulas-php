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
    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Linguagem</th>
                <th>Descrição</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($linguagens as $linguagem): ?>
                <tr>
                    <td><?php echo $linguagem["id"]; ?></td>
                    <td><?php echo $linguagem["nome"]; ?></td>
                    <td><?php echo $linguagem["descricao"]; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>