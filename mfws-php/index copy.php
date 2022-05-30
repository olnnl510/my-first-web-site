<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1><a href="index.php">WEB</a><h1>
        <ol>
          <?php
            $list = scandir('data'); // scandir('./data'); 의 결과를 list라는 변수에 담음
            // var_dump($list); // 어떤 값을 리턴하는지 항상 확인. print_r과 비슷
            $i = 0;
            while($i<count($list)){
              if($list[$i] != '.'){
                if($list[$i] != '..'){
          ?>
          <li><a href="index.php?id=<?=$list[$i]?>"><?=$list[$i]?></a></li>
          <?php
            }
              }
              $i = $i +1;
            }
          ?>
        <!-- <li><a href="index.php?id=HTML">HTML</a></li>
        <li><a href="index.php?id=CSS">CSS</a></li>
        <li><a href="index.php?id=JavaScript">JavaScript</a></li> -->
        </ol>
        <h2>
          <?php
          if(isset($_GET['id'])){
            echo $_GET['id'];}
          else {echo "Welcome";}
          ?>
        </h2>
        <?php
        if(isset($_GET['id'])){
          echo file_get_contents("data/".$_GET['id']); // echo data/id 값에 해당하는 파일의 내용
        }
        else {echo "Hello, PHP";}
        ?>
</body>
</html>
