<?php
$host = "localhost"; $user = "root"; $password = "1234";$dbname = "grade";
$link = new mysqli($host, $user, $password, $dbname);

$result = $link->query("select * from student_tbl");
echo "필드 개수 : ", $result->field_count;
$result = $link->query("select * from score_tbl");
echo "<br>레코드 개수 : ", $result->num_rows;
?>