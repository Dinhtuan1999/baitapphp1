<?php
$arr = array(2,1,3,5,4,7);
function sumArr ($number , $arr){
    if ($number == 1){
        $sum=0;
        foreach ( $arr as $val){
            $sum += $val;
        }
        return $sum;
    }
    if ($number == 2){
        rsort($arr);
        foreach ($arr as $val){
            echo $val . "<bar>";
        }
    }
}
echo  sumArr(1,$arr) ."<br>";
echo sumArr(2,$arr);
