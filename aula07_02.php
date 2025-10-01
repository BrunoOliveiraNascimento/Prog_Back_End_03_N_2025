<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario ternario impar ou par</title>
</head>
<body>
    <h1>Formulario ternario impar ou par</h1>
    <form method="post" action="aula07_02part2.php">  
        numero 1: <input type="number" name="numero1"><br>
        numero 2: <input type="number" name="numero2"><br>
        <input type="submit" value="Enviar!">
    </form>
    <br>
    <?php
    if (count($_POST)==0)exit; //se não tiver nada no post, sai
    $numero1 = (int)$_POST["numero1"];
    $numero2 = (int)$_POST["numero2"];
    $res= ($numero1 % 2 == 0) ? "Par" : "Impar";
    echo "O numero $numero1 é $res<br>";
    $res= ($numero2 % 2 == 0) ? "Par" : "Impar";
    echo "O numero $numero2 é $res<br>"; 
    ?>
    <br>
    <a href="index.php">Voltar ao Index</a>
</body>
</html>