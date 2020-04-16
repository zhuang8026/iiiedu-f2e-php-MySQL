<?php 
    $arr = [1,2,3];
    $str="";
    $str2="";
    for($i=0; $i<count($arr); $i++){
        $str.= $arr[$i].",";
    }
    echo $str;
    echo  "<br>";
    for($i=0; $i<count($arr); $i++){
        if($str2=="") {
            $str2=$arr[$i];
        } else {
            $str2.=",".$arr[$i];
        }
    }
    // echo $str2;
    print_r($str2);
    echo  "<br>";
    $arr2 = explode(",",$str2);
    print_r($arr2);
    
?>