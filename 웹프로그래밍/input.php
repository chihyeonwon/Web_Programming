<?php
$host = "localhost"; $user = "root"; $password = "1234";$dbname = "chwon_db_3";
$link = new mysqli($host, $user, $password, $dbname);
//subject_tbl 테이블에는 insert 구문으로 입력
$link->query("INSERT INTO chwon_tbl_3 values('20191234','yjhwang','M',35,'Seoul Junggu')");
$link->query("INSERT INTO chwon_tbl_3 values('20201245','khshu','M',33,'Pusan Dongrae')");
$link->query("INSERT INTO chwon_tbl_3 values('20204576','chpark','M',34,'Gwangju Namgu')");
?>