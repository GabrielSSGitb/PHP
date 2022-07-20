<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Atribuição</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div>
        <?php
         #$a = 30;
         #$b = 16;
         #$c = 12;
         #echo $c += $a + $b;
         # Adding 10% of increase:
         echo "<h1>Operadores de Atribuição e incremento:</h1>";
         $shirt = $_GET["s"];
         echo "<br>The shirt price is: $".Number_Format($shirt, 2, ",");
         $shirt += $shirt * 10/100;
         echo "</br>With 10% of increase, the shirt cost: $".Number_Format($shirt, 2, ",");
         #Adding 50% of discount:
         $ferrari = $_GET["f"];
         echo "</br>The Ferrari Spider´s price is: $".Number_Format($ferrari, 2, ",", ".");
         $ferrari -= $ferrari * 50/100;
         echo "<br/>You won 50% of discount! Now the price is: $".Number_Format($ferrari, 2, ",", "."); 
         #operadores de incremento:
         #Pré-incremento:
         $n1 = 65;
         ++$n1;
         echo "<br/>$n1";
         #Pós-incremento:
         $n2 = 55;
         $n2++;
         echo "<br>$n2";
         #Usando Decremento:
         $year = $_GET["year"];
         echo "<br>We are not in <b>$year</b> yet!";
         $year--;
         echo " It´s still <b>$year</b>,";
         $lastday = 365;
         $lastday -= 30;
         echo "  We have $lastday days left!!!";
         /*Pré e Pós tem diferença!!!
         $test = 22;
         $test = --$test + 15;*/
         echo "<br><h2>Ultilizando váriaveis de referencia:</h2>";
         $f = 8;
         $g = &$f;
         echo "$g $f";
         $f += 10;
         echo "<br>f vale: $f e g vale: $g";
         echo "<br><h3>Exercicio:</h3>";
         $gemeo1 = 2000;
         $gemeo2 = &$gemeo1;
         echo "<br>Os Gemeos tem R$$gemeo2, e vão ganhar: R$4000";
         echo "<br>Agora eles tem um total de: R$ ".$gemeo1 += 4000;

         echo "<br><h2>Váriaveis de Váriaveis:</h2>";
         $name = "PHP";
         $$name = "PHP Hypertext Processor";
         echo "<br>$name:";
         echo "<br>$PHP";
        ?>
    </div>
</body>
</html>