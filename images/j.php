<?php
$arr = array(23, 62, 21, 12, -7);
$length = count($arr);


///function minmy($array) {

// $length = count($arr);
$result=array();

for ($j=0; $j < $length; $j++ ) {

    $min = $arr[0];
    for ($i = 0; $i < $length-$j; $i++) {
        if ($arr[$i] < $min) {
            $min = $arr[$i];

        }



    }

    $result[$j]=$min;
    echo $min;
    unset($min);
    $j++;


}



for ($k=0; $k < $length; $k++){

    echo $result[$k];
}