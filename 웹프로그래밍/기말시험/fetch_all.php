<?php
$host = "localhost"; $user = "root"; $password = "1234";$dbname = "grade";
$link = new mysqli($host, $user, $password, $dbname);

$result = $link->query("select * from subject_tbl");
$datas = $result->fetch_all(MYSQLI_ASSOC);
foreach ($datas as $data) {
    echo $data['subject'], $data['code'], $data['credit'], $data['classify'], "<br>";
}

$result = $link->query("select * from score_tbl");
$datas = $result->fetch_all(MYSQLI_NUM);
foreach ($datas as $data) {
    echo $data[0], $data[1], $data[2], $data[3], "<br>";
}
?>