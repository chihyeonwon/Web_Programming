<?php
$host = "localhost"; $user = "root"; $password = "1234";
$link = new mysqli($host, $user, $password);
if (!$link) {
    die("DB 접속 실패" . $link->connect_error);
} else echo "DB 접속 성공<br>";
?>