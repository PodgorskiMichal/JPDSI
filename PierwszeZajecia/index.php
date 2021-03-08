<!DOCTYPE html>
<html>
  <head>
    <title>"Witaj świecie"</title>
  </head>
  <body>

    Hellow word :D <br/><br/>

    <?php
      $a = 4;
      $b = 9;
      $c = 3;

      $delta = $b * $b - 4 * ($a * $c);
      print ("Dla a = " .$a. ", b = " .$b. ", c = " .$c. "<br/>");
      print ("delta = " .$delta. "<br/> <br/>");

      if($delta > 0)
        {
          $x1 = (sqrt($delta) - $b) / (2 * $a);
          $x2 = (-sqrt($delta) - $b) / (2 * $a);
          echo "Pierwiastki: <br/> x1: " .$x1. "<br/> x2: " .$x2. "<br/><br/>";

        }
      else if($delta == 0)
        {
          $x1 = (sqrt($delta) - $b) / (2 * $a);
          echo "Pierwiastek: " .$x1. "<br/><br/>";
        }
        if($delta < 0)
        {
          echo "Delta nie ma pierwiastka <br/><br/>";
        }

      echo "tabliczka mnożenia <br/>";
      for($y = 1; $y <= 10; $y++)
      {
        for($x = 1; $x <= 10; $x++)
        {

          $z = $x* $y;
          printf("%3d ",$z);
        }
        echo "<br/>";
      }
    ?>

  </body>
</html>
