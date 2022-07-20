<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data2</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div>
        <?php 
          $usern = $_GET["username"] == "" ? "[Not informed]" : $_GET["username"];
          $birth = $_GET["birth"] == "" ? 2022 : $_GET["birth"];
          $sex = $_GET["sex"];
          $age = date("Y") - $birth;
          echo "$usern have $age years old, and was born in $birth!!! <br>"; 
          $checksex = $sex == "Man" ? "He is a Man! 💪" : "She is a Hooman! 👩‍✈️";
          echo $checksex;
        ?>
        <br>
        <a href="form2.html">Go Back Here!</a>
    </div>
</body>
</html>