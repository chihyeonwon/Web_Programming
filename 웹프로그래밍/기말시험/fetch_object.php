<?php
$host = "localhost"; $user = "root"; $password = "1234";$dbname = "grade";
$link = new mysqli($host, $user, $password, $dbname);

$result = $link->query("select * from subject_tbl");
while ($data = $result->fetch_object()) {
    echo $data->subject, $data->code, $data->credit, $data->classify, "<br>";
}
?>