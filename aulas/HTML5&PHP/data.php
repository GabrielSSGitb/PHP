<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Sended</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div>
        <?php 
          $n1 = $_GET["num1"];
          $n2 = $_GET["num2"];
          echo $n1 >= $n2 ? "Multiplying: $n1 * $n2 = ".($n1 * $n2) : "Dividing: $n1 / $n2 = ".($n1 / $n2);
        ?>
        <a href="form.html">Back to form</a>
    </div>
</body>
</html>