<?php
	$cookie_name = "login";
	$cookie_value = $_POST["userid"];
	setcookie($cookie_name, $cookie_value, time()+3600);
?>
<html>
<head>
	<title>Login Cookie</title>
</head>
<body>
<a href="./view_cookie.php">쿠키 보기</a>
</body>
</html>
