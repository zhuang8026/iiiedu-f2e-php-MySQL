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
echo "<br /><br />";
echo "strlen (一個 utf-8 中文字，佔 3 個字元): ".strlen($strVar); //22*3=66 /字元长度，一字串 = 3字元
echo "<br /><br />";
echo "mb_strlen: ".mb_strlen($strVar); //22 /字串长度
echo "<br /><br />";
echo "strpos:(一個 utf-8 中文字，佔 3 個字元): ".strpos($strVar, "所"); //9*3=27 /查询 字元 的 位置 
echo "<br /><br />";
echo "mb_strpos: ".mb_strpos($strVar, "所"); // 9 /回传 索引，“所”在第九个（0~9）
echo "<br />";
echo "mb_strpos: ".mb_strpos($strVar, "我"); // 回传 false 但不会显示在页面上
echo "<br /><br />";
echo "substr_count: ".substr_count($strVar, "所"); // 返回指定文字 的 次数

?>
</body>
</html>