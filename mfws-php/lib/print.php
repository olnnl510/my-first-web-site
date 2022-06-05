<?php
  function print_title() {
    if(isset($_GET['id'])) {
      echo htmlspecialchars($_GET['id']); // 보안XSS
    } else {
      echo "Welcome";
    }
  }

  function print_description() {
    if(isset($_GET['id'])){
      $basename = basename($_GET['id']); // 보안 파일 경로 보호
      echo htmlspecialchars(file_get_contents("data/".$basename)); // echo data/id 값에 해당하는 파일의 내용 // 보안XSS
    }
    else {echo "Hello, PHP";}
  }

  function print_list() {
    $list = scandir('data'); // scandir('./data'); 의 결과를 list라는 변수에 담음
    // var_dump($list); // 어떤 값을 리턴하는지 항상 확인. print_r과 비슷
    $i = 0;
    while($i < count($list)) {
      $title = htmlspecialchars($list[$i]); // 보안XSS
      if($list[$i] != '.') {
        if($list[$i] != '..') {
          echo "<li><a href=\"index.php?id=$title\">$title</a></li>";
        }
      }
      $i = $i +1;
    }
  }
?>