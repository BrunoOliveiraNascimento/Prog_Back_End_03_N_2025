<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 05 - 04</title>
</head>
<body style="background-color:rgba(133, 0, 0, 1);">
    <h1>Aula05_04 - 09/09/25</h1>
     <?php
    $nome = $_POST["nome"];
    $data = $_POST["data"];
    $av1 = $_POST["av1"];
    $av2 = $_POST["av2"];
    $media = ($av1 + $av2) / 2;
    echo "Nome: $nome <br>";
    echo "Data: $data <br>";
    echo "Av1: $av1 <br>";
    echo "Av2: $av2 <br>";
    echo "Média: $media <br>";
    ?>
    <br>
    <a href="index.php">Voltar ao Index</a>
</body>
</html>