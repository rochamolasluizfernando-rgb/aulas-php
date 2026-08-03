<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 30px;
        }

        .container {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .card {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            width: 250px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            border-top: 5px solid #007bff;
        }

        .card h2 {
            margin-top: 0;
            color: #007bff;
        }

        .card p {
            margin: 8px 0;
        }
    </style>
</head>
<body>
    <h1>Exercício 02: Estruturas de dados com arrays e objetos</h1>
    <hr>

    <h2>Pessoa 1</h2>
<?php
    // Array associativo
    $pessoa1 = [
        "usuario" => "fulano123",
        "email" => "fulano@gmail.com",
        "senha" => "123abc",
        "idade" => 30,
        "sexo" => "Masculino",
        "cidade" => "São Paulo"
    ];

    // Objeto genérico
    $pessoa2 = new stdClass();
    $pessoa2->usuario = "fulana456";
    $pessoa2->email = "fulana@email.com";
    $pessoa2->senha = "456def";
    $pessoa2->idade = 25;
    $pessoa2->sexo = "Feminino";
    $pessoa2->cidade = "Rio de Janeiro";
?>

<section class="container">
    <article class="card">
        <h2>Pessoa 1</h2>
        <p><strong>Usuário:</strong> <?= $pessoa1["usuario"] ?></p>
        <p><strong>E-mail:</strong> <?= $pessoa1["email"] ?></p>
        <p><strong>Idade:</strong> <?= $pessoa1["idade"] ?></p>
    </article>

    <article class="card">
        <h2>Pessoa 2</h2>
        <p><strong>Usuário:</strong> <?= $pessoa2->usuario ?></p>
        <p><strong>E-mail:</strong> <?= $pessoa2->email ?></p>
        <p><strong>Idade:</strong> <?= $pessoa2->idade ?></p>
    </article>

</section>
</body>
</html>