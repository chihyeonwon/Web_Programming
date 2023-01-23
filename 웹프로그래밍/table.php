<?php
$host = "localhost"; $user = "root"; $password = "1234";
$link = new mysqli($host, $user, $password);
$result = $link->query("create database chwon_db_3");
if (!$result) {
    die("DB 생성 실패".$result->connect_error);
} else echo "DB 생성 성공";
$mydb = $link->select_db("chwon_db_3");
$create_tbl = "create table chwon_tbl_3 (
id char(10) primary key,
nick char(10) not null,
mw char(2) not null,
old tinyint(3),
resid varchar(20)
);";
$link->query($create_tbl);
$link->close();
?>