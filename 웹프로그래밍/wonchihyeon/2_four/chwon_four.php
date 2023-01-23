<html>
<head>
	<meta charset = "UTF-8">
	<title> 출력 결과 </title>
</head>
<body>
	<?php
	$chwon_or1 = $_GET["or1"]; // 값1
	$chwon_or2 = $_GET["or2"]; // 값2

	if(isset($_GET["op"])) {
		$chwon_op = $_GET["op"]; // 연산자
		if($chwon_op == "add") {
			echo "$chwon_or1 + $chwon_or2 = ".number_format($chwon_or1+$chwon_or2, 0, "", "$");
		}
		else if($chwon_op == "minus") {
			echo "$chwon_or1 - $chwon_or2 = ".number_format($chwon_or1-$chwon_or2, 0,"", "$") ;
		}
		else if($chwon_op == "multiply") {
			echo "$chwon_or1 * $chwon_or2 = ".number_format($chwon_or1*$chwon_or2, 0, "", "$");
		}
		else if($chwon_op == "divide") {
			echo "$chwon_or1 / $chwon_or2 = ".number_format($chwon_or1/$chwon_or2, 3,"*", "$" );
		}
	}
	else echo "연산자를 선택해주세요";
	?>
</body>
</html>
