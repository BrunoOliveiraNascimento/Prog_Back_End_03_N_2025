<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:rgba(145, 76, 76, 1);">
    <h1>Aula07_01</h1>
    <h2>Não - not - !</h2>
<?php
$a = 50;
$b = 120;
$c= ($a <= $b); //true
$d= !($a <= $b); //false
var_dump($c);
echo "<br>";
var_dump($d);
?>
<hr>
<h2>E - and - &&</h2>
<?php
$a=50;
$b=120;
$c=200;
$d=(($a<=$b) and ($a<=$c));
$e=(($a<=$b) &&  ($a>=$c));
var_dump($d);
echo "<br>";
var_dump($e);
?>
<hr>
<h2>Ou - or - ||</h2>
<?php
$a=50;
$b=120;
$c=200;
$d=(($a>=$b) or ($a>=$c));
$e=(($a>=$b) || ($a<=$c));
var_dump($d);
echo "<br>";
var_dump($e);
?>
<hr>
<h2>Xor</h2>
<?php
$a=50;
$b=120;
$c=200;
$d=(($a<=$b) xor ($c<=$a));
$e=(($a>=$b) xor ($a>=$c));
var_dump($d);
echo "<br>";
var_dump($e);
?>
<hr>
<h2>Operador ternário</h2>
<?php
$a=50;
$b=120;
$c=200;
$d=($a<=$b) ? "Verdadeiro" : "Falso";
$e=($a>=$c) ? "Verdadeiro" : "Falso";
echo "d = $d<br>e = $e";
?>
<br><br>
<a href="index.php">Voltar ao Index</a>
</body>
</html>