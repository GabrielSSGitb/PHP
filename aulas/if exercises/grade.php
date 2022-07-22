<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade result</title>
    <link rel="stylesheet" href="estilo.css">
    <style>
          a {
            position: relative;
            top: 10px;
            background-color: black;
            color: white;
            padding: 5px;
          }
          a:hover {
            cursor: pointer;
            background-color: blue;
            border: none;
            padding: 5px;
            text-decoration: none;
          }
    </style>
</head>
<body>
    <div>
        <?php
          $s1 = $_GET["s1"] == "" ? "[ERROR]" : $_GET["s1"];
          $s2 = $_GET["s2"] == "" ? "[ERROR]" : $_GET["s2"];
          $r = ($s1 + $s2) / 2;
          if($r >= 7) {
            echo "Grade: <b style='color: green'>$r</b> <br>";
            echo "Student: <b style='color: green'>Approved!</b>";
          }else if($r < 7) {
             echo "Grade: <b style='color: red'>$r</b> <br>";
             echo "Student: <b style='color: red'>Failed</b>";
          };
        ?>
        <br>
        <a href="grade.html">Check another grade</a>
    </div>
</body>
</html>