<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Area</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div>
      <?php 
        $name = $_GET["namecamp"] == "" ? "[Someone]" : $_GET["namecamp"];
        $birth = $_GET["birth"] == "" ? date("Y") : $_GET["birth"];
        $age = date("Y") - $birth;

        if($age < 16) {
          echo " $name You can not vote yet, you are only $age years old!!!";
          echo "You also can not drive $name, sorry about that!";
        }else if($age == 16 || $age == 17) {
          echo "Congratulations $name, you can vote you are $age years old!!!";
        }else if($age >= 18) {
          echo "You are all good $name! You can already drink, drive and more important of all,vote!";
        };
      ?>
      <br>
      <a href="vote.html">Go back here!</a>
    </div>
</body>
</html>