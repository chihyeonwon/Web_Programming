<?php
$host = "localhost"; $user = "root"; $password = "1234";
$link = new mysqli($host, $user, $password);
$link->query("create database testdb");
//mysqli_query($link, "create database testdb");
?>