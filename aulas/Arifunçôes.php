<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arifunções</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div>
        <?php
          $numa = $_GET["a"];
          $numb = $_GET["b"];
          $numc = $_GET["c"];
          echo "Transformando um numero em absoluto: ".abs($numa);
          echo "</br> O resultado de $numb <sup>2</sup> é = ".pow($numb, 2);
          $raiz = sqrt($numb);
          echo "</br>A raiz quadrada de $numb é igual á: ".round($raiz);
          // o ceil arredonda para cima e o floor para baixo.
          echo "</br>O valor inteiro de $numc é igual á: ".intval($numc);
          echo "</br>O $numa em reais é R$ ".number_format($numa, 2,",",".");
        ?>
    </div>
</body>
</html>