<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1>Array</h1>
    <?php
    // 배열을 담는 방법
    $coworkers = array('egoing', 'leezche', 'duru', 'taeho'); // 4개의 문자열을 담고 있는 배열의 표현식.

    // 배열(값)을 꺼내는 방법
    echo $coworkers[1].'<br>';
    echo $coworkers[3].'<br>';

    // 배열의 값이 몇개인가 (카운트 라는 함수에 확인하고 싶은 변수를 담아주면)
    echo count($coworkers).'<br>';
    var_dump(count($coworkers));

    echo '<br>';

    array_push($coworkers, 'praphittie'); // 배열에 추가
    var_dump($coworkers);

    echo '<br>';

    ?>
</body>
</html>

<!--
    array배열을 coworkers 라는 변수에 담아줌
-->