<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liberação de Idade</title>
</head>
<body style="background-color:rgba(64, 107, 247, 1);">
    <h1>Aula08_01 - 30/09/25</h1>
    <form method="post" action="aula08_01.php">  
        Nome: <input type="text" name="nome"><br>
        Digite sua idade: <input type="number" name="idade"><br>
        <input type="submit" value="Enviar!">
        <br>
        <?php
         if (count($_POST)==0)exit; 
         $idade = (int)$_POST["idade"];
            $nome = $_POST["nome"];
            $idade = $_POST["idade"];
            if ($idade > 0 && $idade < 13) {
                echo $nome . ", você não pode criar uma conta. A idade mínima é 13 anos.";
                echo "<br>Você digitou $idade anos.";
            } elseif ($idade < 18) {
                echo $nome . ", você pode criar uma conta com o consentimento dos pais.";
                echo "<br>Você digitou $idade anos.";
            } elseif ($idade < 65) {
                echo $nome . ", você pode criar uma conta. Bem-vindo à nossa rede social!";
                echo "<br>Você digitou $idade anos.";
            } elseif ($idade >= 65) {
                echo $nome . ", você pode criar uma conta. Lembre-se de verificar nossas configurações de privacidade.";
                echo "<br>Você digitou $idade anos.";
            } else  {  
                   echo $nome . ", sua idade está inválida.";
                   echo "<br>Você digitou $idade anos.";
               }
        ?>
        <br>
    </form>
    <br>
    <a href="index.php">Voltar ao Index</a>
</body>
</html>