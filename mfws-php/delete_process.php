<?php
    unlink('data/'.basename($_POST['id'])); // 보안 파일 경로 보호 (id값이 파일명만 들어갈 수 있도록 나머지 정보를 쳐냄)
    header('Location: ./index.php');

?>