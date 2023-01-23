    <html>
<head>
<body>
<?php
    $item = $_POST['item'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $total = $price * $quantity;
    $host = "localhost"; $user = "root"; $password = "1234";$dbname = "chwon_db_4";
    $link = new mysqli($host, $user, $password, $dbname);
    $mydb = $link->select_db("chwon_db_4");
$link->query("INSERT INTO chwon_tbl_4 values('$item', $price, $quantity, $total)");
?>
<a href="input.php">매출 입력하기</a> <br>
<a href="output.php">매출 출력하기</a>
</body>
</head>
</html>