<!DOCTYPYE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>我的 PHP 程式</title>
</head>
<body>
<?php
$strVar = "   <a href='https://www.iii.org.tw/' target='_blank'>超連結</a>''''(年年歲歲花相似?歲歲年年人不同.)\n[http://www.epochtimes.com/b5/17/2/2/n8770329.htm]\n***%%%---";
echo "原始字串: ".$strVar; // 一般字串
echo "<br /><br />";
echo "原始字串: $strVar";
echo "<br /><br />";
echo "nl2br: ".nl2br($strVar); // 使用 \n 换行
echo "<br /><br />";
echo "strip_tags: ".strip_tags($strVar); // 去除html和php 标签
echo "<br /><br />";
echo "quotemeta: ".quotemeta($strVar); // 在特殊符号前加入 "\"
echo "<br /><br />";
echo "addcslashes-1: ".addcslashes($strVar, '%-'); // 在特殊符号前加入 "%-"
echo "<br /><br />";
echo "addslashes-2: ".addslashes($strVar);
echo "<br /><br />";
echo "stripcslashes: ".stripcslashes($strVar);
echo "<br /><br />";
echo "stripslashes: ".stripslashes($strVar);
echo "<br /><br />";
echo "trim: ".trim($strVar);
echo "<br /><br />";
echo "ltrim: ".ltrim($strVar);
echo "<br /><br />";
echo "rtrim: ".rtrim($strVar);
?>
</body>
</html>