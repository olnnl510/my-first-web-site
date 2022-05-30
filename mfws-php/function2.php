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
        // 함수 정의 (출력기능 내장 : 쓸모 적음)
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
        print($left + $right);
        print("<br>");
    }
        sum(2,4); // left라는 변수의 값을 2, right라는 변수의 값을 4로 설정. (중괄호 안에서 사용!) => 입력값을 뭘 주느냐에 따라서 다르게 동작
        sum(4,6);
    
    ?>
    <h2>return</h2>
    <?php
    function sum2($left, $right) {
        return $left+$right;
        echo 323234; // return을 만나는 순간 함수는 종료 돼버림. 밑에 무시됨.
    }
        print(sum2(2,4)); // 내부적으로 계산한 결과 리턴 : 쓸모 많음(다양한 용도로 쓸수 있음)
        print("<br>");
        file_put_contents('result.txt', sum(2,4));
    ?>
</body>
</html>