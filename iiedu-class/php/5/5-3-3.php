<?php
$programmingLang = 'PHP';
$myVar = <<<Msg
        看著被你退回的信，燒成了灰燼，…
        …
        愈往遠處飛去，你愈在我心裡，…
        I love $programmingLang
Msg;


// ---------------- 差异? 
$myVar2_1 = <<<Msg3
        看著被你退回的信，燒成了灰燼，……愈往遠處飛去，你愈在我心裡，…I love $programmingLang
Msg3;

$myVar2_2 = <<<Msg2
        "看著被你退回的信，燒成了灰燼，……愈往遠處飛去，你愈在我心裡，…I love".$programmingLang
Msg2;

$myVar2_3 = <<<Msg
        看著被你退回的信，燒成了灰燼，……愈往遠處飛去，你愈在我心裡，…I love $programmingLang 
Msg;


// ---------------- 

$myVar3 ="看著被你退回的信，燒成了灰燼，……愈往遠處飛去，你愈在我心裡，…I love".$programmingLang; 
$myVar4 ="看著被你退回的信，燒成了灰燼，……愈往遠處飛去，你愈在我心裡，…I love $programmingLang"; 
$myVar4 ='看著被你退回的信，燒成了灰燼，……愈往遠處飛去，你愈在我心裡，…I love$programmingLang'; 


echo $myVar.'<br>';
echo $myVar2_1.'<br>';
echo $myVar2_2.'<br>';
echo $myVar2_3.'<br>';
echo $myVar3.'<br>';
echo $myVar4.'<br>';
?>