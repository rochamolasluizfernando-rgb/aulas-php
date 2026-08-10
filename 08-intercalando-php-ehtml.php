<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisando PHP intercalando com HTML</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <h1>Revisando PHP intercalando com HTML</h1>
    <hr>
<?php 
$aluno = "Fulano";
const ESCOLA = "Senac Penha";

echo "<p>O aluno se chama $aluno</p>";
echo "<p>Ele estuda na escola ".ESCOLA."</p>";
?>
    <h2>Usando PHP intercalando com HTML</h2>
    <p><i>(usar o PHP onde precisa)</i></p>
    <p>O aluno se chama <?= $aluno ?></p>
    <p>Ele estuda na escola <?= ESCOLA ?></p>

    <hr>

    <h2>Usando PHP intercalando comandos com HTML</h2>

<?php $idade = 25; ?> <!-- PHP onde preciso -->

    <h3>Resultado:</h3>
<?php 
if ($idade >= 18) {
    echo "<p><b>$aluno</b> é maior de idade</p>";
} else {
    echo "<p><i>$aluno</i> é menor de idade</p>";
}
?>
    <h3>Resultado (usando PHP só onde é necessário):</h3>
<?php 
if($idade >= 18):
?>
    <p><b> é maior de idade</b></p>
<?php 
else:
?>
    <p><i><?= $aluno ?></i> é menor de idade</p>
<?php 
endif;
?>
    <h3>Resultado (refatorado)</h3>
<?php 
if($idade >= 18){
    $htmlSaida = "<b>$aluno</b>";
    $palavra = "menor";
} else {
    $htmlSaida = "<i>$aluno</i>";
    $palavra = "menor";
}
?>
    <p> <?= $htmlSaida ?> é <?= $palavra ?> de idade</p>
</body>
</html>