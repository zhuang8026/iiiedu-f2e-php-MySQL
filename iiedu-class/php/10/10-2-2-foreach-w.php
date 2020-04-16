<?php
$arrStudents[] = array(
    '學號' => '101',
    '姓名' => '阿土伯',
    '性別' => '男',
    '生日' => '2000/3/14',
    '手機號碼' => '0910123456'
);

$arrStudents[] = array(
    '學號' => '102',
    '姓名' => '錢夫人',
    '性別' => '女',
    '生日' => '2000/6/6',
    '手機號碼' => '0978222333'
);

$arrStudents[] = array(
    '學號' => '103',
    '姓名' => '孫小美',
    '性別' => '女',
    '生日' => '2000/7/15',
    '手機號碼' => '0939666999'
);

$arrStudents[] = [
    '學號' => '104',
    '姓名' => '約翰喬',
    '性別' => '男',
    '生日' => '2000/8/7',
    '手機號碼' => '0910765432'
];


$arr[] = [
    '104',
    '約翰喬',
    '男',
    '2000/8/7',
    '0910765432'
];
$arr[] = [
    '104',
    '約翰喬',
    '男',
    '2000/8/7',
    '0910765432'
];
$arr[] = [
    '104',
    '約翰喬',
    '男',
    '2000/8/7',
    '0910765432'
];

echo "<hr>";

foreach($arr as $key => $obj) {
    echo "<pre>";
    // echo $key.":";
    // print_r($obj[$key])."<br />";
    echo "</pre>";
    echo "<hr>";
    for($i=0; $i<count($obj); $i++){
        // echo $i;
        echo "<pre>";
        print_r($obj[$i]);
    }
}

echo "<hr>";
echo gettype($arr);
// for($i = 0; $i < count($arrStudents); $i++){
//     echo '學號: '.$arrStudents[$i]['學號']."<br />";
//     echo '姓名: '.$arrStudents[$i]['姓名']."<br />";
//     echo '性別: '.$arrStudents[$i]['性別']."<br />";
//     echo '生日: '.$arrStudents[$i]['生日']."<br />";
//     echo '手機號碼: '.$arrStudents[$i]['手機號碼']."<br />";
//     echo "<hr>";
// }