<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04</title>
    <style>
   * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
 
body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    padding: 30px;
}
 
.container {
    width: 700px;
    margin: 0 auto;
}
 
h1 {
    text-align: center;
    margin-bottom: 20px;
}
 
table {
    width: 100%;
    border-collapse: collapse;
    font-size: 16px;
    background-color: white;
}
 
th {
    background-color: #000;
    color: white;
    padding: 9px;
    text-align: center;
    border: 1px solid #ccc;
}
 
td {
    padding: 9px;
    border: 1px solid #ccc;
}
 
td:first-child {
    text-align: center;
    width: 50px;
}
 
tr:nth-child(even) {
    background-color: #b9e0f2;
}
 
tr:nth-child(odd) {
    background-color: white;
 
} 
</style>
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
    <table class="table table-bordered table-striped table-hover">
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
                    <td><?= $linguagem['id']; ?></td>
                    <td><?= $linguagem['nome']; ?></td>
                    <td><?= $linguagem['descricao']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>