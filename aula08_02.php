<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comandos switch</title>
</head>
<body>
    <h1>Comandos switch aula 30/09/2025</h1>
    <?php
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'portuguese'); // Configura a localidade para português do Brasil
date_default_timezone_set('America/Sao_Paulo'); // Define o fuso horário para São Paulo
$diaSemana = date('w');  // Retorna o dia da semana em número (0-6)
echo "<h2>" .date("d/m/Y H:i:s") . "</h2> - <br>"; // Exibe a data e hora atual no formato brasileiro
echo "Dia da semana: $diaSemana -<br>"; // Exibe o número do dia da semana
switch ($diaSemana) { 
    case 0:
        echo "Domingo";
        break;
    case 1:
        echo "Segunda-feira";
        break;
    case 2:
        echo "Terça-feira";
        break;
    case 3:
        echo "Quarta-feira";
        break;
    case 4:
        echo "Quinta-feira";
        break;
    case 5:
        echo "Sexta-feira";
        break;
    case 6:
        echo "Sábado";
        break;
    default:
        echo "Dia inválido";
}
echo "<hr>";
$a="uninove";
echo md5($a); // Gera um hash MD5 da string "uninove"
echo "<br>";
?>
    <br><br>
    <a href="index.php">Voltar ao Index</a>
    
</body>
</html>