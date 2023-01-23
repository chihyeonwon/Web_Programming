<?php
$dbname = $_POST["dbname"];
$host = "localhost"; $user = "root"; $password = "1234";
$link = new mysqli($host, $user, $password);
$link->query("create database $dbname");
//mysqli_query($link, "create database testdb");
?>