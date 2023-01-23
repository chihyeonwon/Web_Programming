<?php
$host = "localhost"; $user = "root"; $password = "1234";$dbname = "grade";
$link = new mysqli($host, $user, $password, $dbname);

$result = $link->query("select * from subject_tbl");
$row_count = $result->num_rows;
for($i=0; $i<$row_count; $i++)
{
	$data = $result->fetch_assoc();
    echo $data['subject'], $data['code'], $data['credit'], $data['classify'], "<br>";
}
?>