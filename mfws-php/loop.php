<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Loop</title>
  </head>
  <body>
    <h1>while</h1>
    <?php
    echo '1<br>';
    $i = 0;
    while($i < 3){ // 값이 3번 실행된 후 false가 되도록 코딩 (i의값이 3보다 작은 동안의)
      echo '2<br>';
      $i = $i +1; // 반복문이 실행될 때 마다 i의 값이 1씩 증가하도록 코딩
    }
    echo '3<br>';
     ?>
  </body>
</html>
