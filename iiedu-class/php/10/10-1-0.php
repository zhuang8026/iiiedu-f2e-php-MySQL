<!DOCTYPYE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>我的 PHP 程式</title>
</head>
<body>
<?php
$arr[] = 1;
$arr[] = 2;
$arr[] = 3;
$arr[5] = 12;
$arr[7] = 18;
$arr[] = 23; 

echo "<pre>";
print_r($arr);
echo "<pre>";
?>
</body>
</html>