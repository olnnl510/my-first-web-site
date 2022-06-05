<?php
  require_once('lib/print.php'); // 중복해서 print.php가 호출되는것을 방지함
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
      <?php
        print_title(); // 제목을 출력하나보네 (가독성 up), 위 함수만 수정 -> 모두 수정 폭발적 효과
      ?>
    </title>
</head>
<body>
    <h1><a href="index.php">WEB</a><h1>
        <ol>
          <?php
            print_list();
            // echo "<li>$list[0]</li>";
            // echo "<li>$list[1]</li>";
            // echo "<li>$list[2]</li>";
            // echo "<li>$list[3]</li>";
            // echo "<li>$list[4]</li>";
            // echo "<li>$list[5]</li>";
          ?>
        <!-- <li><a href="index.php?id=HTML">HTML</a></li>
        <li><a href="index.php?id=CSS">CSS</a></li>
        <li><a href="index.php?id=JavaScript">JavaScript</a></li> -->
        </ol>