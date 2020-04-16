<!DOCTYPYE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>我的 PHP 程式</title>
</head>
<body>
<?php
    $arr = [1,2,2,3,5,5,6];
    $arr = array_unique($arr);
    echo "<pre>";
    print_r($arr);
    echo "<pre>";
    // 答案： Array
        // (
        //     [0] => 1
        //     [1] => 2
        //     [3] => 3
        //     [4] => 5
        //     [6] => 6
        // )
?>
</body>
</html>