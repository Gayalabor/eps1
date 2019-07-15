<!DOCTYPE html>
<html lang="kr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>function</title>
  </head>
  <body>
    <h1>Function</h1>
    <h2>Basic</h2>
    <?php
      function basic()  {
        print("kfsjkfskfs1")."<br>";
        print("2")."<br>";
        print("kfsjkfskfs1")."<br>";
        print("2")."<br>";
      }
      basic();
      basic();
    ?>
    <h2>parameter &amp; argument</h2>
      <?php
      function sum($a, $b) {
        print($a+$b);
    }
    sum(2,4);
    ?>
    <h2>return</h2>
    <?php
      function sum2($left, $right) {
        return $left+$right;
      }
      print(sum2(5,6));
    ?>
  </body>
</html>
