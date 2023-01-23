<?php
	session_start();
	$_SESSION['login'] = $_POST['userid'];
?>
<html>
<head>
	<title>Login Cookie</title>
</head>
<body>
<a href="./view_session.php">세션 보기</a>
</body>
</html>
