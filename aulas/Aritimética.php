<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aritimética</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div>
        <h1>Fazendo Aritimética heheheboy</h1>
        <?php
           echo "Somando em PHP: <br/>";
           $n1 = 20;
           $n2 = 5;
           $media = ($n1 + $n2) / 2;
           echo "À média de 25 é: $media";
           echo $n1 + $n2;
           echo " <br/>Subtráindo em PHP:<br/>";
           $sub1 = 30;
           $sub2 = 5;
           $s = $sub1 - $sub2;
           echo "A Substração entre $sub1 e $sub2 é igual á $s!";
           echo "<br/>Multiplicação em PHP:<br/>";
           $s = 20 * 5;
           echo "A multiplicação entre 20 e 5 é: $s <br/>";
           echo "À divisão inteira entre $n1 e $n2 é igual a: ".$n1 / $n2; 
           echo "<br/>Divisão de resto:<br/>";
           echo "A divisão entre $n1 e 3 é:".($n1 % 3); 
        ?>
    </div>
</body>
</html>