<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Média</title>
</head>
<body>
    <h1>Resultado do aluno</h1>
    <hr>

    <p id="notas"></p>
    <p id="media"></p>
    <p id="situacao"></p>

    <script>
        let nota1 = 8;
        let nota2 = 7;
        let nota3 = 6;

        // Função para calcular a média
        function calcularMedia(nota1, nota2, nota3){
            return (nota1, nota2, nota3) / 3;
        }

        function verificarSituacao(media) {
            if (media => 7) {
                return "Aprovado";
            } else {
                return "Reprovado";
            }
        }

        let media = calcularMedia(nota1, nota2, nota3);
        let situacao = verificarSituacao(media);

        document.getElementById("notas").innerHTML =
            `Notas:${nota1},${nota2},${nota3}`;
        document.getElementById("media").innerHTML =
            `Média:${media.toFixed(2)}`;
        document.getElementById("situacao").innerHTML =
            `Situação: ${situacao}`;
    </script>
</body>
</html>