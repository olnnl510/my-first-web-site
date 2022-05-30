<?php
  function print_title() {
    if(isset($_GET['id'])) {
      echo $_GET['id'];
    } else {
      echo "Welcome";
    }
  }

  function print_description() {
    if(isset($_GET['id'])){
      echo file_get_contents("data/".$_GET['id']); // echo data/id 값에 해당하는 파일의 내용
    }
    else {echo "Hello, PHP";}
  }

  function print_list() {
    $list = scandir('data'); // scandir('./data'); 의 결과를 list라는 변수에 담음
    // var_dump($list); // 어떤 값을 리턴하는지 항상 확인. print_r과 비슷

    $i = 0;
    while($i < count($list)) {
      if($list[$i] != '.') {
        if($list[$i] != '..') {
          echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>";
        }
      }
      $i = $i +1;
    }
  }
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
        <h2>
          <?php
            print_title();
          ?>
        </h2>
        <?php
          print_description();
        ?>
</body>
</html>
