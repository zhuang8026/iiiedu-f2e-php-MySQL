<!DOCTYPYE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>我的 PHP 程式</title>
</head>
<body>
<?php
// $strVar = "你好，我是 %s ，我今年 %d 歲，身高 %d 公分，體重 %d 公斤"; 
$strVar = "你好，我是 %s ，我今年 %s 歲，身高 %s 公分，體重 %s 公斤";
echo "原始字串: ".$strVar;

echo "<hr />";

$name = "Darren";
$age = 18;
$height = 171;
$weight = 80;
printf($strVar, $name, $age, $height, $weight); //這裡不用 echo 或 print

echo "<hr />";

$strPrintf = sprintf($strVar, $name, $age, $height, $weight); //需要echo
echo $strPrintf;

echo "<hr />";

$arr = [$name, $age, $height, $weight];
vprintf($strVar, $arr);

echo "<hr />";

$arr2 = [$name, $age, $height, $weight];
$strVsprintf = vsprintf($strVar, $arr2); // 需要echo
echo $strVsprintf;
?>
</body>
</html>