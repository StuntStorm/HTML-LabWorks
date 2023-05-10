<html>
  <head>
    <title>Multiplication Table Example</title>
  </head>
  <body>
    <?php
      $number = 6;
      echo "<h2>Multiplication Table for $number:</h2>";
      for ($i = 1; $i <= 10; $i++) {
        echo "$i X $number = " . ($i * $number) . "<br>";
      }
    ?>
  </body>
</html>
