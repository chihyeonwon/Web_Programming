<html>
<head>
    <meta charset = "UTF-8">
    <title> 출력 결과 </title>
</head>   
<body>
    <?php
    $chwon_unitPrice = $_POST["unitPrice"]; // 단가 
    $chwon_quantity = $_POST["quantity"]; // 개수
    $chwon_total = $chwon_unitPrice*$chwon_quantity;

    echo "h단가 ".number_format($chwon_unitPrice)."원 X "."{$chwon_quantity}개는 ".number_format($chwon_total)."원입니다.";

?>
</body>
</html>