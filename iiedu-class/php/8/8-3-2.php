<?php
echo $_GET['myName'];
echo "<br>";
echo $_GET['youName'];
echo "<br>";
if(isset($_GET['myName'])) {
    echo '有 $_GET["myName"]';
} else {
    echo '沒有 $_GET["myName"]';
}