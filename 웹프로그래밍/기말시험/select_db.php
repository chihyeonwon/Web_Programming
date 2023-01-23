<?php
$host = "localhost"; $user = "root"; $password = "1234";
$link = new mysqli($host, $user, $password);
$mydb = $link->select_db("mysql");
//$link = mysqli_connect($host, $user, $password);
//mysqli_select_db($link, "mysql");
?>