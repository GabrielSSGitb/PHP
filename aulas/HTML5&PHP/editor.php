<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
       $txt = $_GET["text"] == "" ? "[ERROR]" : $_GET["text"];
       $size = $_GET["size"];
       $color = $_GET["color"];
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text Editor</title>
    <link rel="stylesheet" href="estilo.css">
    <style>
        span.text {
            font-size: <?php echo $size ?>;
            color: <?php echo $color ?>;
        }
    </style>
</head>
<body>
    <div>
        <?php 
          echo "<span class='text'>$txt</span>";
        ?>
    </div>
</body>
</html>