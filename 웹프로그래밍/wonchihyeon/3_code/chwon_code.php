<html>
<head>
	<meta charset = "UTF-8">
	<title> 출력 결과 </title>
</head>
<body>
	<?php
	$chwon_name = $_POST["name"]; // 이름
	$chwon_math = $_POST["math"]; // 수학점수
	$chwon_phys = $_POST["phys"]; // 물리점수
	$chwon_chem = $_POST["chem"]; // 화학점수
	$chwon_sum = $chwon_math + $chwon_phys + $chwon_chem; // 점수 합
	$chwon_avg = number_format($chwon_sum/3,2,".",""); // 점수 평균
	?>
	<?php echo "[이름] : {$chwon_name} <br>\n"; ?>
	<ul style = "list-style-type:circle;">
		<li><?php echo "수학 점수 : {$chwon_math}";?></li>
		<li><?php echo "물리 점수 : {$chwon_phys}";?></li>
		<li><?php echo "화학 점수 : {$chwon_chem}";?></li>
	</ul>
	<?php echo "[합계] : {$chwon_sum}";?> <br>
	<?php echo "[평균] : ".number_format($chwon_avg, 2, ".", ","); ?>	
</body>
</html>
