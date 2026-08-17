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

    <h2>1. Função time()</h2>
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

    <h2>2. Função getdate()</h2>

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

    echo "Dia: " . $data["mday"] . "<br>";
    echo "Mês: " . $data["mon"] . "<br>";
    echo "Ano: " . $data["year"] . "<br>";
    echo "Hora: " . $data["hours"] . "<br>";
    echo "Minuto: " . $data["minutes"] . "<br>";
    echo "Segundo: " . $data["seconds"];
    ?>

    <h3>Análise do resultado</h3>
    <p>
        O resultado mostra separadamente cada informação da data e hora. Isso é útil quando
        precisamos utilizar o dia, mês, ano ou horário individualmenteem um programa.
    </p>

    <h2>3. Função mktime()</h2>

    <p>
    A função <strong>mktime()</strong>faz o processo inverso de algumas funções de data: ela
    recebe informações como hora, minuto, segundo mês, dia e ano e transforma esses valores em
    um timestamp Unix.
    </p>

    <h3>Parâmetros</h3>
    <p>
    A função pode receber os seguintes parâmetros:
    </p>

    <ul>
        <li>Hora</li>
        <li>Minuto</li>
        <li>Segundo</li>
        <li>Mês</li>
        <li>Dia</li>
        <li>Ano</li>
    </ul>

    <h3>Valor retornado</h3>
    <p>
    Retorna um número inteiro contendo o timestamp Unix correspondente à data e hora informadas.
    </p>

    <h3>Exemplo</h3>

    <?php
    $timestamp = mktime(10, 30, 0, 12, 25, 2026);

    echo "Timestamp:" . $timestamp . "<br>";

    echo "Data correspondente:" . date("d/m/Y H:i:s", $timestamp);
    ?>

    <h3>Análise do resultado</h3>
    <p>
        O código cria um timestamp correspondente a 25 de dezembro de 2026 ás 10:30:00. Depois a
        função <strong>date()</strong> é utilizada apenas para trasformar o timestamp novamente em uma
        data fácil de visualizar.
    </p>

    <h2>4. Função checkdate()</h2>

    <p>
        A função <strong>checkdate()</strong> serve para verificar se uma determinada data é válida.
        Ela pode ser utilizada, por exemplo, para verificar se uma data digitada pelo usuário realmente existe
    </p>

    <h3>Parâmetros</h3>
    <p> A função recebe três parâmetros: </p>

    <ul>
        <li><strong>Mês:</strong> número do mês, de 1 a 12;</li>
        <li><strong>Dia:</strong> número do dia;</li>
        <li><strong>Ano:</strong> ano entre 1 e 32767.</li>
    </ul>

    <h3>Valor retornado</h3>
    <p>
    Retorna <strong>true</strong>quando a data é válida e <strong>false</strong> quando a data não 
    é válida.
    </p>

    <h3>Exemplo</h3>
    <?php 
    $dataValida = checkdate(12, 25, 2026);
    $dataInvalida = checkdate(2, 30, 2026);

    echo "25/12/2026: ";
    
    if($dataInvalida){
        echo "Data válida";
    } else {
        echo "Data inválida";
    }
    ?>

    <h3>Análise do resultado</h3>
    <p>
        A primeira data, 25/12/2026, é considerada válida. Já 30/02/2026
        é considerada inválida, pois fevereiro não possui 30 dias.
        A função retorna valores booleanos: <strong>true</strong> ou
        <strong>false</strong>.
    </p>

    <h2>Conclusão</h2>

     <p>
        As funções pesquisadas são utilizadas para trabalhar com datas e
        horários no PHP. A função <strong>time()</strong> obtém o timestamp
        atual, <strong>getdate()</strong> separa informações de uma data,
        <strong>mktime()</strong> transforma uma data e horário em timestamp
        e <strong>checkdate()</strong> verifica se uma data é válida.
    </p>
</body>
</html>