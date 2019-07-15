<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Array</title>
  </head>
  <body>
    <h1>Array</h1>
    <?php
    $i = 0;
    $coworkers = array('kkm','kkkk', 'bbb' , 'ccc', 'ddd');
    while ($i <= count($coworkers)) {
    echo $coworkers[$i].'<br>';
    $i = $i + 1;
    if($i<4){
      echo "$i.<br>";
    } else {
      echo "감사합니다.<br>";
    }
    }
    var_dump($coworkers);
    ?>

  </body>
</html>
