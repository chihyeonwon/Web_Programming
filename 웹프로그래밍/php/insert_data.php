<?php
$host = "localhost"; $user = "root"; $password = "1234";$dbname = "grade";
$link = new mysqli($host, $user, $password, $dbname);
//subject_tbl 테이블에는 insert 구문으로 입력
$link->query("INSERT INTO subject_tbl values('창의적사고','C1029',2,'교양')");
$link->query("INSERT INTO subject_tbl values('고대한국사','C2084',2,'교양')");
$link->query("INSERT INTO subject_tbl values('인터넷개론','M1014',3,'교양')");
$data_input="INSERT INTO subject_tbl values('웹프로그래밍','M2076',3,'교양')";
$link->query($data_input);
$data_input="INSERT INTO subject_tbl values('데이터베이스','M3102',3,'교양')";
$link->query($data_input);
$data_input="INSERT INTO subject_tbl values('프레임워크','M4085',3,'교양')";
$link->query($data_input);

//student_tbl, score_tbl 테이블에는 insert 구문으로 입력
$link->query("LOAD DATA INFILE '../input_data/student_tab.dat' INTO TABLE student_tbl
LINES TERMINATED BY '\r\n'");
$data_input = "LOAD DATA INFILE '../input_data/score_tab.dat' INTO TABLE score_tbl
LINES TERMINATED BY '\r\n'";
$link->query($data_input);

$link->close();
?>