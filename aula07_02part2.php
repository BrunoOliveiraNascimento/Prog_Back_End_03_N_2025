<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body style="background-color:rgba(88, 80, 88, 1);">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        $resultado1 = ($numero1 % 2 == 0) ? "Par" : "Impar";
        $resultado2 = ($numero2 % 2 == 0) ? "Par" : "Impar";
        echo "Resultado 1: numero $numero1 é $resultado1<br>";
        echo "Resultado 2: numero $numero2 é $resultado2";
    }
    ?>
    <br>
    <a href="aula07_02.php">Voltar para tela anterior</a>
</body>
</html>