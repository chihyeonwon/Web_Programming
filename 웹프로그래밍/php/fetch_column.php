<?php
$host = "localhost"; $user = "root"; $password = "1234";$dbname = "grade";
$link = new mysqli($host, $user, $password, $dbname);
$result = $link->query("select * from subject_tbl");
$count = $result->field_count;
for($i=0; $i<$count; $i++){
  while ($col_data = $result->fetch_column($i)) {
	echo $col_data, "<br>";
  }
}

?>