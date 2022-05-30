<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Function</h1>
    <h2>Basic</h2>
    <?php
        // 함수 정의
        function basic() {
            print("Lorem ipsum dolor1<br>");
            print("Lorem ipsum dolor2<br>");
        }

        // 함수 호출
        basic();
        basic();
        basic();
    ?>
    <h2>parameter &amp; argument</h2>
    <?php
    function sum($left, $right) { // 입력값 2개
        print($left+$right);
        print("<br>");

        sum(2,4); // left라는 변수의 값을 2, right라는 변수의 값을 4로 설정. (중괄호 안에서 사용!) => 입력값을 뭘 주느냐에 따라서 다르게 동작
        sum(4,6);
    }
    ?>
</body>
</html>