<DOCTYPE html> 
<html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" conetnt="width=device-width,initial-scale=1.0">
      <title>Operadores Relacionais</title>
      <link rel="stylesheet" href="estilo.css">
  </head>
  <body>
 <div>
  <?php
echo "<h1>Relacionais e Operador Unário:</h1>";
  $a = 20;
  $b = 9;
  $r = $a > $b ? $a * $b : $a / $b;
  echo $r;
//Exersice: Show a student´s situation accordinly to his average:
  $semester1 = 10;
  $semester2 = 5.7;
  $media = ($semester1 + $semester2)/2;
 // $seegrade = $media >= 5.5 ? "Congratulation" : "Sorry pal u didn´t pass it!";
  //echo "<br>$seegrade, your grade is: $media";  
  echo $media >= 5.5 ? " <br>Congratulation! Your grade is: $media" : " <br>Sorry pal u didn´t pass it! Your grade is: ".$media;
  //Exersice: Making the user choose between addup and multiply:
  $op = $_GET["op"];
  $num1 = $_GET["num1"];
  $num2 = $_GET["num2"];
  $do = $op == "s" ? $num1 + $num2 : $num1 * $num2;
  echo "<br> The values you passed it are: <b>$num1</b> and <b>$num2</b>";
  echo "<br>With the operation the result is: <b>$do</b>";

  echo "<br> <h2>Using === with simple condition:</h2>";
  $f = 19;
  $f2 = "19";
  $equal = $f == $f2 ? "Yes" : "NO";
  $identical = $f === $f2 ? "Yes" : "No";
  echo "<br><h3>The values are: $f and $f2</h3>";
  echo "<br>Are the values of f and f2 equal? <b>$equal</b>";
  echo "<br>Are they identical? <b>$identical</b>";
  echo "<br>What is the primitive type of f? <b></b>".gettype($f);
  echo "<br>What is the primitive type of f2? ".gettype($f2);
//Exersice: Make a program that informs if a person is obligared to vote:
  echo "<h3>Can you vote?</h3>";
  $year = $_GET["year"];
  $age = 2022 - $year;
 /* echo $age >= 18 && $age <=65 ? "You have to vote, you have: <b>$age</b> years old!" : "You don´t need to vote!";*/
 echo "<br>You were born in <b>$year</b>, so you are <b>$age</b> years old!";
  if($age <= 15) {
    echo "<br>You can not vote you are a kid!";
  }else if($age == 16 || $age == 17) {
    echo "<br>You can take your title and vote if you want!";
  }else if($age >= 18) {
    echo "<br>You have to vote!";
  };
  ?>
  </div>
</body>
</html>