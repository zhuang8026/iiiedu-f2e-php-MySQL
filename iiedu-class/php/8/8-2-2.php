<?php
        echo 'myName = ' . $_GET['myName'];
    echo "<br />";
        echo 'myAge = ' . $_GET['myAge'];
    echo "<br />";
        echo 'myHeight = ' . $_GET['myHeight'];
    echo "<br />";
        echo 'myWeight = ' . $_GET['myWeight'];
    echo "<hr>";
        echo '<pre> 是一个可将array变成人看的标签';
    echo "<br />";
        echo ' print_r($_GET) 是将网址上得到的arry 打印出来';
    echo "<hr>";
    echo "<pre>";
        print_r($_GET);
    echo "</pre>";
    // 老师范例
    if($_GET["myName" === 'DarrenYang']){
        echo '有$_GET["myName"]';
    }else{
        echo '没有$_GET["myName"]';
    };