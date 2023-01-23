<!doctype html>
<html>
<body>
<?php
$host = "localhost"; $user = "root"; $password = "1234"; $db = "chwon_db_4";
$link = new mysqli($host, $user, $password, $db);
if (!$link) {
    die("MySQL 접속 실패" . $link->connect_error);
}
$result = $link->query("select * from chwon_tbl_4");
?>
<table border=1 cellspacing=0 cellpadding=3>
<tr align=center style=background:#ccffff>
    <td>품목
    <td>단가
    <td>수량
    <td>합계
<?php
while ($data = $result->fetch_assoc()) {
	echo "<tr align=center>";
	echo "<td>{$data['item']}<td>{$data['price']}<td>{$data['quantity']}<td>{$data['total']}";
}
?>
</table>
<br>

<a href="input.php">매출 입력하기</a>
</body>
</html>