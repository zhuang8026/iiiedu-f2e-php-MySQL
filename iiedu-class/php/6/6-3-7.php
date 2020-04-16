<!DOCTYPYE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>我的 PHP 程式</title>
</head>
<body>
<?php
$strVar = "Alex & Bill & Carl & Darren <a href='https://www.iii.org.tw/' target='_blank'>超連結</a> &copy; &trade;";
echo "原始字串: ".$strVar;
echo "<hr />";
echo "strtolower: ".strtolower($strVar);
echo "<hr />";
echo "strtoupper: ".strtoupper($strVar);
echo "<hr />";
echo "htmlspecialchars: ".htmlspecialchars($strVar);
echo "<hr />";
echo "nl2br: ".nl2br($strVar);
echo "<hr />";
echo "strip_tags: ".strip_tags($strVar);
?>
</body>
</html>