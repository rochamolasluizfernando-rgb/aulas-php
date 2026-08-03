<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
    <style>
        .nome {
            color: blue;
        }

        .curso {
            color: red;
        }
    </style>
</head>
<body>
    <?php 
    // Variáveis 
    $dataHoje = "29/07/2026";
    $nomePessoa = "Fulano";
    $nomeCurso = "Curso PHP";
    $cargaHoraria = 100;

    $limiteFaltas = $cargaHoraria * 0.25;
    ?>

    <h1>Informações do aluno</h1>
    
    <p>Data de Hoje: <?php echo $dataHoje; ?></p>

    <p>
        O nome da pessoa é <span class="nome"> <?php echo $nomePessoa; ?></span>.
    </p>

    <p>
        O curso que está fazendo é <span class="curso"><?php echo $nomeCurso; ?></span>.
    </p>

    <p>
        A carga horária é de <span class=><?php echo $cargaHoraria; ?></span>.
    </p>

    <p>
        O limite de faltas é de <span class=><?php echo $limiteFaltas; ?></span>.
    </p>

    <?php 
    $teste = "jhdshakd";
    echo $teste;
    ?>
    <p class="">Teste <?= $teste ?></p>
</body>
</html>