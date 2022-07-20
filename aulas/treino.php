<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treino</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div>
        <?php
          echo "<h1>Hellow again yo, welcome back to PHP!!!</h1>";
          $n1 = 20;
          $n2 = 38;
          echo "A soma entre $n1 e $n2 é igual á:".($n1 + $n2);
          $num1 = $_GET["a"];
          $num2 = $_GET["b"];
          echo " </br>Multiplicando os valores da url: $num1 e $num2 temos:".($num1 * $num2);
          echo "</br>A Média de $num1 x $num2 é:".(($num1 * $num2)/2);
          $divisao = $num1 / $num2;
          echo "</br> A divisão entre $num1 e $num2 é igual á:".abs($divisao);
          echo "</br>$num2 arredondado:".round($num2);
          echo "</br>Arredondando pra cima:".ceil($num2);
          echo "</br>Arredondado pra baixo:".floor($num2);
          #intval and Number_Format:
          $unknown = 88.90;
          echo "</br>Tranformando valor de variavel em inteiro:".intval($unknown);
          $testmill = 3899;
          echo "</br>Botando o $testmill em reais: R$".Number_Format($testmill, 2, ",", ".");
          $porcent = 90;
          #Maximixation in PHP:
          echo "</br>$porcent<sup>2</sup> is equal to:".pow($porcent, 2);
          #Square Root:
          $number = 40;
          $squareroot = sqrt($number);
          echo "</br>The squareroot of $number is: $squareroot";
        ?>
    </div>
</body>
</html>