<?php
//1)
for($number = 0;$number<=100;$number++){
    if($number%2==0){
        echo $number . "\n";
    }
}
//2)
$a = array(1, 23, 44, 88, 13, 11, 7, 8);
foreach ($a as $b){
    if($b%2==0){
        echo $b . "\n";
    }
}gh
