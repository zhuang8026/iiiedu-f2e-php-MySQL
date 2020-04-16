<!DOCTYPYE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>我的 PHP 程式</title>
</head>
<body>
<?php
$strVar01 = "Alex";
$strVar02 = "Bill";
$strVar03 = "alex";
$strwill01 = "william01";
$strwill02 = "Zilliam02";

echo "Alex 比對 Bill:: ".strcmp($strVar01, $strVar02); // -1
echo "<hr />";
echo "Bill 比對 Alex:: ".strcmp($strVar02, $strVar01); //  1
echo "<hr />";
echo "Alex 比對 Alex:: ".strcmp($strVar01, $strVar01); //  0
echo "<hr />";
echo "Alex 比對 Alex:: ".strcmp($strVar01, $strVar03); // -1
echo "<hr />";
echo "Alex 比對 alex (不分大小寫):: ".strcasecmp($strVar01, $strVar03); // Alex : alex
echo "<hr />";
echo "william01 比對 Zilliam02 :: ".strcasecmp($strwill01, $strwill02); // -3
echo "<hr />";
echo "01 比對 03 :: ".strcasecmp("01", "03"); 
echo "<hr />";
echo "-01 比對 03 :: ".strcasecmp("-01", "03"); 
echo "<hr />";
echo "40 比對 20 :: ".strcasecmp("40", "20"); 
echo "<hr />";
?>
</body>
</html>