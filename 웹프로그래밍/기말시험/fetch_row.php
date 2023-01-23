<?php
$host = "localhost"; $user = "root"; $password = "1234";$dbname = "grade";
$link = new mysqli($host, $user, $password, $dbname);

$result = $link->query("select * from subject_tbl");
while ($data = $result->fetch_row()) {
    echo $data[0], $data[1], $data[2], $data[3], "<br>";
}
?>