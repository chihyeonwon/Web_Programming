<?php
$host = "localhost"; $user = "root"; $password = "1234";$dbname = "chwon_db_3";
$link = new mysqli($host, $user, $password, $dbname);
$result = $link->query("select * from chwon_tbl_3");
$datas = $result->fetch_all(MYSQLI_NUM);
foreach ($datas as $data) {
    echo "$data[0] $data[1] $data[2] $data[3] $data[4]"."<br>";
}
?>