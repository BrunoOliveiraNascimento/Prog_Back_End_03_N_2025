<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula06_01</title>
</head>
<body style="background-color:rgba(70, 33, 33, 1);">
    <h1>Aula06_01</h1>
    <h2>Operador Aritmético</h2>
    <?php
$a=10;
$b=2;
echo "Adição:".($a + $b);
echo "<br>Subtração:".($a - $b);
echo "<br>Multiplicação:".($a * $b);
echo "<br>Divisão:".($a / $b);
echo "<br>Módulo:".($a % $b);
echo "<br>Exponenciação:".($a ** $b);
?>    
<h2>Operador Atribuição</h2>
<?php
$a=10;
$b=2;
$a+=$b; //$a=$a+Sb = 10+2 = 12
$b-=5; //$b=$b-5 = 2-5 = -3
echo "a = ".$a; // a = 12
echo "<br>b = ".$b; // b = -3
$c=11;
$d=6;
$c%=$d; //$c=$c%$d = 11%6 = 5
$d+=$a; //$d=$d+$a = 6+12 = 18
echo "<br>c = ".$c; // c = 5
echo "<br>d = ".$d; // d = 18
?>
<h2>Operador String</h2>
<?php
$a = "Maria ";
echo "$a <br>"; // Maria
$b = "Leopoldina ";
echo "$b <br>"; // Leopoldina
echo $a . $b; // Maria Leopoldina
$b .= $a; // $b = $b . $a = "Leopoldina " . "Maria " = "Leopoldina Maria "
echo "<br>$b";  // Leopoldina Maria
?>
<h2>Operador Incremento/Decremento</h2>
<?php
$x = 100;
echo "x = ".++$x; // x = 101
echo "<br>x final = ".$x; // x final = 101
?>
<br>
<?php
$x = 100;
echo "x = ".$x++; // x = 100
echo "<br>x final = ".$x; // x final = 101
?>
<hr>
<?php
$i=10;
echo "<br>i = $i"; // i = 10
$i+=4; // i = 14
/*
$i++; // i = 11
$i++; // i = 12
++$i; // i = 13
++$i; // i = 14
*/
echo "<br>i = $i"; // i = 14
/*$i--; // i = 13
$i--; // i = 12
--$i; // i = 11
*/
$i-=3; // i = 11
echo "<br>i = $i"; // i = 11
?>
<br>
<h2>Operador Comparação/Relacional</h2>
<?php
/* 
= atribuição
== igualdade (valor)
=== idêntico (valor e tipo)
*/
$a=10; //inteiro
$b="10"; //string
echo "Igualdade = ".($a==$b)."<br>"; //true
echo "Idêntico = ".($a===$b)."<br>"; //false
echo "Não igual = ".($a!=$b)."<br>";  //false
echo "Não Idêntico = ".($a!==$b)."<br>"; //true
?>
<hr>
<?php
$a=10;
$b=10;
$c=11;
echo "Menor: ".($a<$b)."<br>"; //false
echo "Menor ou igual: ".($a<=$b)."<br>"; //true
echo "Maior: ".($c>$b)."<br>"; //true
echo "Maior ou igual: ".($c>=$b)."<br>"; //true
?>
<br>
<a href="index.php">Voltar ao Index</a>
</body>
</html>