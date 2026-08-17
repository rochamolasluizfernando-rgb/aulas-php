<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa - Funções de Data e Hora</title>
</head>
<body>
    <h1>Pesquisa sobre funções de data e hora do PHP</h1>
    <hr>

    <h2>Função time()</h2>
    <p>
        A função <strong>time()</strong>retorna o horário atual do sistema 
        representado como um timestamp. Esse valor representa a quantidade de segundos que se
        passaramdesde uma certa data.
    </p>

    <h3>Parâmetros</h3>
    <p>A função <strong>time()</strong> não recebe parâmetros</p>

    <h3>Valor retornado</h3>
    <p>
        Retorna um número inteiro contendo o timestamp Unix correspondeneteao momento atual.
    </p>

    <h3>Exemplo</h3>
    <?php 
    $agora = time();
    
    echo "Timestamp atual: ". $agora;
    ?>
</body>
</html>