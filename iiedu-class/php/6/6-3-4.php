<!DOCTYPYE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>我的 PHP 程式</title>
</head>
<body>
<?php
$strVar = "資策會數位教育研究所，資訊，數位，教育，研究";
echo "原始字串: ".$strVar;
echo "<hr />";

echo "substr: ".substr($strVar, 9, 21);     // 查找字元,并返回字串
echo "<hr />";

echo "mb_substr: ".mb_substr($strVar, 3, 7);// 查找字串,并返回字串
echo "<hr />";

echo "str_replace: ".str_replace("數位", "digital", $strVar); // 替换字串
echo "<hr />";

echo "str_pad: ".str_pad($strVar, 70, "=", STR_PAD_RIGHT); // STR_PAD_RIGHT 向右填满
                                                           // STR_PAD_LEFT  向左填满
                                                           // STR_PAD_BOTH  向两侧填满
                                                           // mb_str_pad()
echo "<hr />";

echo "str_repeat: ".str_repeat($strVar, 2); // 
?>
</body>
</html>