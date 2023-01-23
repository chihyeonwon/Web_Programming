<html>
<head>
    <meta charset = "UTF-8">
    <title> 출력 결과</title>
</head>
<body>
    <?php
    $chwon_name = $_GET["name"];
    $chwon_number = $_GET["number"];
    $chwon_age = $_GET["age"];
    $chwon_country = $_GET["country"];
    ?>
    <ul style = "list-style-type:circle;">
        <li><?php echo "이름 : {$chwon_name} "?></li>
        <li><?php echo "학번 : {$chwon_number}" ?></li>
        <li><?php echo "연령대 : {$chwon_age}" ?></li>
        <li><?php echo "거주지 : {$chwon_country}" ?></li>
    </ul>
</body>
</html>
