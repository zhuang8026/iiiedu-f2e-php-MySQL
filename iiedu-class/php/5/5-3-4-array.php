<?php 
        // $arr = ["alex-0","alex-1","alex-2","alex-3"];
        // for($i=0; $i<count($arr); $i++){
        //         // echo $arr[$i]['name'];
        //         // echo $arr[$i]['age'];
        //         echo $arr[$i]."<br>";
        // }
?>
<?php 
        $arr = [
                [
                "name" => "alex",
                "age" => 17
                ],
                [
                "name" => "wills",
                "age" => 18
                ],
                [
                "name" => "apple",
                "age" => 19
                ],
        ];
        for($i=0; $i<count($arr); $i++){
                echo $arr[$i]['name']."：";
                echo $arr[$i]['age']."<br>";;
        }
        echo json_encode($arr)."<br>";
        $str_json = json_encode($arr);    // object to json string
        
        print_r(json_decode($str_json)) ; // json to string object  
                                          // print_r  => 用來印出陣列（PHP Array）的內容
                                          // echo     => 打印
?>
<!-- php 的阵列中（“[]”），必须是一个“[]”,因为 php 的物件是就是 []  -->