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
    Retorna um número inteiro contendo o timestamp Unix correspondente
    ao momento atual.
    </p>
 
     <h3>Exemplo</h3>
    <?php
    $agora = time();
    
    echo "Timestamp atual: " . $agora;
    ?>
    
    <h3>Análise do resultado</h3>
    <p>
    O resultado exibido é um número inteiro. Esse número representa o
    momento atual em segundos desde 1º de janeiro de 1970.
    </p>
 
    <h2>Função getdata()</h2>

    <p>
    A função <strong>getdate()</strong> é utilizada para obter informações em um array, facilitando o acesso ao dia, mês, ano, hora, minuto e segundo.
    </p>

    <h3>Parâmetros</h3>
    <p>A função pode receber um parâmetro opcional: <strong>timestamp</strong>. Caso ele não seja informado, a função 
    utiliza a data e hora atuais</p>

    <h3>Valor retornado</h3>
    <p>
    Retorna um array associativo contendo informações sobre a data e hora, como dia, mês, ano,
    hora, minuto e segundo.
    </p>

    <h3>Exemplo</h3>
    <?php 
    $data = getdate();

    echo "Dia: ". $data["mday"]. "<br>";
    echo "Mês: ". $data["mon"]. "<br>";
    echo "Ano: ". $data["year"]. "<br>";
    echo "Hora: ". $data["hours"]. "<br>";
    echo "Minuto: ". $data["minutes"]. "<br>";
    echo "Segundo: ". $data["seconds"];
    ?>

    <h3>Análise do resultado</h3>
    <p>
    O resultado mostra separadamente cada informação da data e hora. Isso é útil quando 
    precisamos utilizar o dia, mês, ano ou horário individualmenteem um programa.
    </p>
</body>
</html>