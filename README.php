  
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
echo "<h1>Mad lips information of a person</h1>";
echo "<hr>";
     ?>
    <form action ="calculator.php" method="get">
color: <input type= "text" name="colorname"><br> <br>
plural noun: <input type= "text" name="plural"><br> <br>
celebraty: <input type= "text" name="celebratyname"><br> <br>
<input type="submit">
    </form>
    <br>   <br>

    <?php
    $color = $_GET["colorname"];
    $pluralnoun = $_GET["plural"];
    $celebraty = $_GET["celebratyname"];

    echo "Roses are $color<br>";
    echo "$pluralnoun are blue <br>";
    echo "I love $celebraty<br>";

    ?>
    <br>

  </body>
</html>
