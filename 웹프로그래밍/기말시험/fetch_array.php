<?php
$host = "localhost"; $user = "root"; $password = "1234";$dbname = "grade";
$link = new mysqli($host, $user, $password, $dbname);

$result = $link->query("select * from subject_tbl");
$data = $result->fetch_array(MYSQLI_NUM);
echo $data[0], $data[1], $data[2], $data[3], "<br>";

$data = $result->fetch_array(MYSQLI_ASSOC);
echo $data['subject'], $data['code'], $data['credit'], $data['classify'], "<br>";

$data = $result->fetch_array(MYSQLI_BOTH );
echo $data['0'], $data['code'], $data['2'], $data['classify'], "<br>";
?>