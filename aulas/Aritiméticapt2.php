<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valores Personalizados</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div>
        <h1>Valores Personalizados:</h1>
        <?php
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            echo "<h2>Valores recebidos pela url:$n1 e $n2 😱 </h2>";
            echo "<br/>A soma vale: ".($n1 + $n2);
            echo "<br/>A Subtração é igual a: ".($n1 - $n2);
            echo "<br/>A média é ".(($n1 + $n2) / 2);
            echo "<br/>A divisão é igual a: ".($n1 / $n2);
            echo "<br/> E o resto da divisão é: ".($n1 % $n2); 
        ?>
    </div>
</body>
</html>