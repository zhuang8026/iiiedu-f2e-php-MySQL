<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // phpinfo(); // 说明文件
        // echo "Hello World";
        for($i=1; $i <10; $i++){
            echo "<p>".$i."</p>"; // "." 是 js 的 “+”
            echo '<div>$i</div>'; // 字串
            echo "<p>$i</p>"; // 输出变数
        }
    ?>

    <ul>
        <?php for($k =1; $k<10; $k++): ?>
            <li><?= $k ?></li>
        <?php endfor ?>
    </ul>

</body>
</html>